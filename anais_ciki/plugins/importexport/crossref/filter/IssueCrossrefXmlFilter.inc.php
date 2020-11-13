<?php

/**
 * @file plugins/importexport/crossref/filter/IssueCrossrefXmlFilter.inc.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2000-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class IssueCrossrefXmlFilter
 * @ingroup plugins_importexport_crossref
 *
 * @brief Class that converts an Issue to a Crossref XML document.
 */

import('lib.pkp.plugins.importexport.native.filter.NativeExportFilter');

class IssueCrossrefXmlFilter extends NativeExportFilter {
	/**
	 * Constructor
	 * @param $filterGroup FilterGroup
	 */
	function __construct($filterGroup) {
		$this->setDisplayName('Crossref XML issue export');
		parent::__construct($filterGroup);
	}

	//
	// Implement template methods from PersistableFilter
	//
	/**
	 * @copydoc PersistableFilter::getClassName()
	 */
	function getClassName() {
		return 'plugins.importexport.crossref.filter.IssueCrossrefXmlFilter';
	}

	//
	// Implement template methods from Filter
	//
	/**
	 * @see Filter::process()
	 * @param $pubObjects array Array of Issues or Submissions
	 * @return DOMDocument
	 */
	function &process(&$pubObjects) {
		// Create the XML document
		$doc = new DOMDocument('1.0', 'utf-8');
		$doc->preserveWhiteSpace = false;
		$doc->formatOutput = true;
		$deployment = $this->getDeployment();
		$context = $deployment->getContext();

		// Create the root node
		$rootNode = $this->createRootNode($doc);
		$doc->appendChild($rootNode);

		// Create and appet the 'head' node and all parts inside it
		$rootNode->appendChild($this->createHeadNode($doc));

		// Create and append the 'body' node, that contains everything
		$bodyNode = $doc->createElementNS($deployment->getNamespace(), 'body');
		$rootNode->appendChild($bodyNode);

		foreach($pubObjects as $pubObject) {
			// pubObject is either Issue or Submission
			$journalNode = $this->createJournalNode($doc, $pubObject);
			$bodyNode->appendChild($journalNode);
		}
		return $doc;
	}

	//
	// Issue conversion functions
	//
	/**
	 * Create and return the root node 'doi_batch'.
	 * @param $doc DOMDocument
	 * @return DOMElement
	 */
	function createRootNode($doc) {
		$deployment = $this->getDeployment();
		$rootNode = $doc->createElementNS($deployment->getNamespace(), $deployment->getRootElementName());
		$rootNode->setAttributeNS('http://www.w3.org/2000/xmlns/', 'xmlns:xsi', $deployment->getXmlSchemaInstance());
		$rootNode->setAttributeNS('http://www.w3.org/2000/xmlns/', 'xmlns:jats', $deployment->getJATSNamespace());
		$rootNode->setAttributeNS('http://www.w3.org/2000/xmlns/', 'xmlns:ai', $deployment->getAINamespace());
		$rootNode->setAttribute('version', $deployment->getXmlSchemaVersion());
		$rootNode->setAttribute('xsi:schemaLocation', $deployment->getNamespace() . ' ' . $deployment->getSchemaFilename());
		return $rootNode;
	}

	/**
	 * Create and return the head node 'head'.
	 * @param $doc DOMDocument
	 * @return DOMElement
	 */
	function createHeadNode($doc) {
		$deployment = $this->getDeployment();
		$context = $deployment->getContext();
		$plugin = $deployment->getPlugin();
		$headNode = $doc->createElementNS($deployment->getNamespace(), 'head');
		$headNode->appendChild($node = $doc->createElementNS($deployment->getNamespace(), 'doi_batch_id', htmlspecialchars($context->getData('initials', $context->getPrimaryLocale()) . '_' . time(), ENT_COMPAT, 'UTF-8')));
		$headNode->appendChild($node = $doc->createElementNS($deployment->getNamespace(), 'timestamp', time()));
		$depositorNode = $doc->createElementNS($deployment->getNamespace(), 'depositor');
		$depositorName = $plugin->getSetting($context->getId(), 'depositorName');
		if (empty($depositorName)) {
			$depositorName = $context->getData('supportName');
		}
		$depositorEmail = $plugin->getSetting($context->getId(), 'depositorEmail');
		if (empty($depositorEmail)) {
			$depositorEmail = $context->getData('supportEmail');
		}
		$depositorNode->appendChild($node = $doc->createElementNS($deployment->getNamespace(), 'depositor_name', htmlspecialchars($depositorName, ENT_COMPAT, 'UTF-8')));
		$depositorNode->appendChild($node = $doc->createElementNS($deployment->getNamespace(), 'email_address', htmlspecialchars($depositorEmail, ENT_COMPAT, 'UTF-8')));
		$headNode->appendChild($depositorNode);
		$publisherInstitution = $context->getData('publisherInstitution');
		$headNode->appendChild($node = $doc->createElementNS($deployment->getNamespace(), 'registrant', htmlspecialchars($publisherInstitution, ENT_COMPAT, 'UTF-8')));
		return $headNode;
	}

	/**
	 * Create and return the journal node 'journal'.
	 * @param $doc DOMDocument
	 * @param $pubObject object Issue or Submission
	 * @return DOMElement
	 */
	function createJournalNode($doc, $pubObject) {
		$deployment = $this->getDeployment();
		$journalNode = $doc->createElementNS($deployment->getNamespace(), 'conference');
		$journalNode->appendChild($this->createContribuitorsMetadataNode($doc));
		$journalNode->appendChild($this->createConferenceMetadataNode($doc));
		$journalNode->appendChild($this->CreateProceedingsSeriesNode($doc, $pubObject));
		return $journalNode;
	}

	//Create and return the conference metadata node 'contribuitors'
	function createContribuitorsMetadataNode($doc){
     	   	$deployment = $this->getDeployment();
        	$context = $deployment->getContext();

        	//contribuitors
        	$contribuitorMetadataNode = $doc->createElementNS($deployment->getNamespace(), 'contributors');
        	$personFirst = $doc->createElementNS($deployment->getNamespace(), 'person_name');
        	$personFirst->setAttribute('sequence', 'first');
        	$personFirst->setAttribute('contributor_role', 'chair');
        	$personFirst->appendChild($node = $doc->createElementNS($deployment->getNamespace(), 'given_name', htmlspecialchars('Fernando Álvaro Ostuni', ENT_COMPAT, 'UTF-8')));
        	$personFirst->appendChild($node = $doc->createElementNS($deployment->getNamespace(), 'surname', htmlspecialchars('Gauthier', ENT_COMPAT, 'UTF-8')));
        	$contribuitorMetadataNode->appendChild($personFirst);
        	$personAdditional = $doc->createElementNS($deployment->getNamespace(), 'person_name');
        	$personAdditional->setAttribute('sequence', 'additional');
        	$personAdditional->setAttribute('contributor_role', 'chair');
        	$personAdditional->appendChild($node = $doc->createElementNS($deployment->getNamespace(), 'given_name', htmlspecialchars('Paulo Mauricio ', ENT_COMPAT, 'UTF-8')));
        	$personAdditional->appendChild($node = $doc->createElementNS($deployment->getNamespace(), 'surname', htmlspecialchars('Selig', ENT_COMPAT, 'UTF-8')));
		$contribuitorMetadataNode->appendChild($personAdditional);


		return $contribuitorMetadataNode;
    }




	/**
	 * Create and return the journal metadata node 'journal_metadata'.
	 * @param $doc DOMDocument
	 * @return DOMElement
	 */
	function createConferenceMetadataNode($doc) {
		$deployment = $this->getDeployment();
		$context = $deployment->getContext();
		
		$journalMetadataNode = $doc->createElementNS($deployment->getNamespace(), 'event_metadata');
		// Full title
		$journalTitle = $context->getName($context->getPrimaryLocale());
		// Attempt a fall back, in case the localized name is not set.
		if ($journalTitle == '') {
			$journalTitle = $context->getData('abbreviation', $context->getPrimaryLocale());
		}
		$journalMetadataNode->appendChild($node = $doc->createElementNS($deployment->getNamespace(), 'conference_name', htmlspecialchars($journalTitle, ENT_COMPAT, 'UTF-8')));
		/* Abbreviated title - defaulting to initials if no abbreviation found */
		$journalAbbrev = $context->getData('abbreviation', $context->getPrimaryLocale());
		if ( $journalAbbrev == '' ) {
			$journalAbbrev = $context->getData('acronym', $context->getPrimaryLocale());
		}
		$journalMetadataNode->appendChild($node = $doc->createElementNS($deployment->getNamespace(), 'conference_theme', htmlspecialchars('Conhecimento para negócios e desenvolvimento social', ENT_COMPAT, 'UTF-8')));

		$journalMetadataNode->appendChild($node = $doc->createElementNS($deployment->getNamespace(), 'conference_acronym', htmlspecialchars($journalAbbrev, ENT_COMPAT, 'UTF-8')));
		/* ADD nova função para cirar o NODE (conference_date), mas teria que criar o front, add no banco. Feita solução paleativa */
        $journalMetadataNode->appendChild($node = $doc->createElementNS($deployment->getNamespace(), 'conference_date', htmlspecialchars('19 e 20 de Novembro de 2020', ENT_COMPAT, 'UTF-8')));

        /* * Both ISSNs are permitted for CrossRef, so sending whichever one (or both) *
        if ($ISSN = $context->getData('onlineIssn') ) {
            $journalMetadataNode->appendChild($node = $doc->createElementNS($deployment->getNamespace(), 'issn', $ISSN));
            $node->setAttribute('media_type', 'electronic');
        }
        **Both ISSNs are permitted for CrossRef so sending whichever one (or both) *
        if ($ISSN = $context->getData('printIssn') ) {
            $journalMetadataNode->appendChild($node = $doc->createElementNS($deployment->getNamespace(), 'issn', $ISSN));
            $node->setAttribute('media_type', 'print');
        }*/
		return $journalMetadataNode;
	}

	/**
	 * Create and return the journal issue node 'journal_issue'.
	 * @param $doc DOMDocument
	 * @param $issue Issue
	 * @return DOMElement
	 */
	function CreateProceedingsSeriesNode($doc, $issue) {
		$deployment = $this->getDeployment();
		$context = $deployment->getContext();
		$deployment->setIssue($issue);

	$journalIssueNode = $doc->createElementNS($deployment->getNamespace(), 'proceedings_series_metadata');
      
       /* Add novo sub-node (series_metadata) */
        $series_metadata = $doc->createElementNS($deployment->getNamespace(), 'series_metadata');
	$title = $doc->createElementNS($deployment->getNamespace(), 'titles');
        $title->appendChild($node = $doc->createElementNS($deployment->getNamespace(), 'title', htmlspecialchars('Anais do IX Congresso Internacional de Conhecimento e Inovação (ciKi)', ENT_COMPAT, 'UTF-8')));
	
	//roceedings_subject = $doc->createElementNS($deployment->getNamespace(), 'proceedings_subject', htmlspecialchars('Conhecimento para negócios e desenvolvimento social', ENT_COMPAT, 'UTF-8'));
        $issn = $doc->createElementNS($deployment->getNamespace(), 'issn',  htmlspecialchars($context->getData('onlineIssn'), ENT_COMPAT, 'UTF-8'));
	$series_metadata->appendChild($title);
//	$series_metadata->appendChild($proceedings_subject);
	$series_metadata->appendChild($issn);

	//Fim sub-no  (series_metadata)
        //add ao no principal (proceedings_series_metadata) o sub-no (series_metadata)
        $journalIssueNode->appendChild($series_metadata);

        //criando sub-no (publisher)
        $publisher = $doc->createElementNS($deployment->getNamespace(), 'publisher');
        $publisher->appendChild($node = $doc->createElementNS($deployment->getNamespace(), 'publisher_name', htmlspecialchars('Ciki - Congresso Internacional de Conhecimento e Inovação', ENT_COMPAT, 'UTF-8')));
        //add ao no principal (proceedings_series_metadata) o sub-no (publisher)
        $journalIssueNode->appendChild($publisher);

        //Criando sub no (noisbn reason) e add ano no principal (proceedings_series_metadata)
//	$noisbn = $doc->createElementNS($deployment->getNamespace(), 'noisbn');
  //      $noisbn->setAttribute('reason', 'archive_volume');
///	$journalIssueNode->appendChild($noisbn);
	

	//Criando no (doi_data) e subs-nos (doi e resource)
        if ($issue->getDatePublished() && $issue->getStoredPubId('doi')) {
            $request = Application::get()->getRequest();
            $journalIssueNode->appendChild($this->createDOIDataNode($doc, $issue->getStoredPubId('doi'), $request->url($context->getPath(), 'issue', 'view', $issue->getBestIssueId($context), null, null, true)));
        }

        if ($issue->getDatePublished()) {
			$journalIssueNode->appendChild($this->createPublicationDateNode($doc, $issue->getDatePublished()));
		}
        /*
		if ($issue->getVolume() && $issue->getShowVolume()){
			$journalVolumeNode = $doc->createElementNS($deployment->getNamespace(), 'journal_volume');
			$journalVolumeNode->appendChild($node = $doc->createElementNS($deployment->getNamespace(), 'volume', htmlspecialchars($issue->getVolume(), ENT_COMPAT, 'UTF-8')));
			$journalIssueNode->appendChild($journalVolumeNode);
		}
		if ($issue->getNumber() && $issue->getShowNumber()) {
			$journalIssueNode->appendChild($node = $doc->createElementNS($deployment->getNamespace(), 'issue', htmlspecialchars($issue->getNumber(), ENT_COMPAT, 'UTF-8')));
		}
		*/
		return $journalIssueNode;
	}

	/**
	 * Create and return the publication date node 'publication_date'.
	 * @param $doc DOMDocument
	 * @param $objectPublicationDate string
	 * @return DOMElement
	 */
	function createPublicationDateNode($doc, $objectPublicationDate) {
		$deployment = $this->getDeployment();
		$publicationDate = strtotime($objectPublicationDate);
		$publicationDateNode = $doc->createElementNS($deployment->getNamespace(), 'publication_date');
		$publicationDateNode->setAttribute('media_type', 'online');
		if (date('m', $publicationDate)) {
			$publicationDateNode->appendChild($node = $doc->createElementNS($deployment->getNamespace(), 'month', date('m', $publicationDate)));
		}
		if (date('d', $publicationDate)) {
			$publicationDateNode->appendChild($node = $doc->createElementNS($deployment->getNamespace(), 'day', date('d', $publicationDate)));
		}
		$publicationDateNode->appendChild($node = $doc->createElementNS($deployment->getNamespace(), 'year', date('Y', $publicationDate)));
		return $publicationDateNode;
	}

	/**
	 * Create and return the DOI date node 'doi_data'.
	 * @param $doc DOMDocument
	 * @param $doi string
	 * @param $url string
	 * @return DOMElement
	 */
	function createDOIDataNode($doc, $doi, $url) {
		$deployment = $this->getDeployment();
		$doiDataNode = $doc->createElementNS($deployment->getNamespace(), 'doi_data');
		$doiDataNode->appendChild($node = $doc->createElementNS($deployment->getNamespace(), 'doi', htmlspecialchars($doi, ENT_COMPAT, 'UTF-8')));
		$doiDataNode->appendChild($node = $doc->createElementNS($deployment->getNamespace(), 'resource', $url));
		return $doiDataNode;
	}

}


