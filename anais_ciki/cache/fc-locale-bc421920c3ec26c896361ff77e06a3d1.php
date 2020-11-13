<?php return array (
  'plugins.importexport.native.displayName' => 'Plugin XML Nativo',
  'plugins.importexport.native.description' => 'Importação e exportação de livros em formato XML nativo do OMP.',
  'plugins.importexport.native.import' => 'Importar',
  'plugins.importexport.native.import.instructions' => 'Carregar arquivo XML para importar',
  'plugins.importexport.native.export' => 'Exportar',
  'plugins.importexport.native.results' => 'Resultados',
  'plugins.inportexport.native.uploadFile' => 'Faça upload de um arquivo e clique em "Importar" para continuar.',
  'plugins.importexport.native.importComplete' => 'A importação foi concluída com êxito. Os seguintes itens foram importados:',
  'plugins.importexport.native.import.error.sectionTitleMismatch' => 'O título da seção "{$section1Title}" e o título da seção  "{$section2Title}" da edição "{$issueTitle}" são compatíveis com edições diferentes existentes na revista.',
  'plugins.importexport.native.import.error.sectionTitleMatch' => 'O título da seção "{$sectionTitle}" da edição "{$issueTitle}" é compatível com uma seção existente, mas o outro título desta seção não é compatível com o outro título da seção existente na revista.',
  'plugins.importexport.native.import.error.sectionAbbrevMismatch' => 'A abreviatura da seção "{$section1Abbrev}" e a abreviatura da seção "{$section2Abbrev}" da edição "{$issueTitle}" são compatíveis com seções distintas existentes na revista.',
  'plugins.importexport.native.import.error.sectionAbbrevMatch' => 'A abreviatura da seção "{$sectionAbbrev}" da edição "{$issueTitle}" é compatível com uma seção existente, mas outra abreviatura desta edição não é compatível com outra abreviatura de seção existente na revista.',
  'plugins.importexport.native.exportSubmissions' => 'Exportar Artigos',
  'plugins.importexport.native.cliUsage' => 'Uso: {$scriptName} {$pluginName} [comando] ...
Comandos:
imporr [xmlFileName] [journal_path] [user_name] ...
export [xmlFileName] [journal_path] artigos [articleId1] [articleId2] ...
export [xmlFileName] [journal_path] artigo [articleId]
export [xmlFileName] [journal_path] edições [issueId1] [issueId2] ...
export [xmlFileName] [journal_path] edição [issueId]

Parâmetros adicionais são necessários para importar dados da seguinte maneira, dependendo
no nó raiz do documento XML.

Se o nó raiz for <article> ou <articles>, parâmetros adicionais serão necessários.
Os seguintes formatos são aceitos:

{$scriptName} {$pluginName} import [xmlFileName] [journal_path] [user_name]
issue_id [issueId] section_id [sectionId]

{$scriptName} {$pluginName} import [xmlFileName] [journal_path] [user_name]
issue_id [issueId] section_name [name]

{$scriptName} {$pluginName} import [xmlFileName] [journal_path]
issue_id [issueId] section_abbrev [abrev]
',
  'plugins.importexport.native.exportIssues' => 'Exportar Edições',
  'plugins.importexport.native.error.unknownSection' => 'Seção desconhecida {$param}',
  'plugins.importexport.native.error.unknownUser' => 'O usuário informado, "{$userName}", não existe.',
  'plugins.importexport.native.import.error.publishedDateMissing' => 'O artigo "{$articleTitle}"está contido em um fascículo, mas não possui data de publicação.',
  'plugins.importexport.native.import.error.issueIdentificationMissing' => 'O elemento de identificação do fascículo está ausente no artigo "{$articleTitle}".',
  'plugins.importexport.native.import.error.issueIdentificationDuplicate' => 'O fascículo existente com o ID {$issueId} corresponde à identificação do fascículo fornecida "{$issueIdentification}".  Este fascículo não será modificado, mas os artigos serão adicionados.',
  'plugins.importexport.native.import.error.issueIdentificationMatch' => 'Nenhum ou mais de um fascículo corresponde à identificação do fascículo fornecido "{$issueIdentification}".',
  'plugins.importexport.native.exportSubmissionsSelect' => 'Selecione arquivos para exportar',
);