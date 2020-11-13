<?php return array (
  'plugins.importexport.datacite.displayName' => 'Plugin de Exportação/Registro DataCite',
  'plugins.importexport.datacite.description' => 'Exporte ou registre metadados de edições, artigos, composições e arquivos suplementares no DataCite.',
  'plugins.importexport.datacite.intro' => '
		Caso deseje registrar DOIs no DataCite, entre em contato com o Gerente por meio da <a href="http://datacite.org/contact" target="_blank">página do DataCite</a>, que irá encaminhá-lo ao seu Representante DataCite local. Uma vez estabelecido o relacionamento com a organização representante, será providenciado o acesso ao serviço  DataCite para a cunhagem de identificadores persistente (DOIs) e registro de metadados associados. Mesmo que não possua um login e senha, será possível exportar dados no formato XML  DataCite, porém não poderá registrar seus DOIs no DataCite por meio do OJS. Note que a senha será gravada como texto puro, isto é, não encriptada, devido aos requisitos de registro do serviço DataCite.
	',
  'plugins.importexport.datacite.settings.form.username' => 'Login (símbolo)',
  'plugins.importexport.datacite.settings.form.usernameRequired' => 'Informe seu login (símbolo) recebido do DataCite. O login não pode conter dois pontos (:).',
  'plugins.importexport.datacite.cliUsage' => 'Uso:
{$scriptName} {$pluginName} export [outputFileName] [journal_path] {issues|articles|galleys} objectId1 [objectId2] ...
{$scriptName} {$pluginName} register [journal_path] {issues|articles|galleys} objectId1 [objectId2] ...
',
  'plugins.importexport.datacite.senderTask.name' => 'Dados DataCite do remetente',
  'plugins.importexport.datacite.settings.description' => 'Por favor configure o plugin de exportação DataCite antes de utilizá-lo pela primeira vez.',
  'plugins.importexport.datacite.settings.form.automaticRegistration.description' => 'OJS depositará DOIs automaticamente no DataCite. Por favor note que isso pode levar um tempo depois da publicação. Você pode verificar os DOIs não registrados.',
  'plugins.importexport.datacite.settings.form.testMode.description' => 'Use o prefixo de testes do DataCite para registro dos DOI. Não esqueça de remover esta opção quando não estiver mais em testes.',
);