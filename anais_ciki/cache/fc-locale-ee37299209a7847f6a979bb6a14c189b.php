<?php return array (
  'plugins.importexport.doaj.displayName' => 'Exportação para DOAJ',
  'plugins.importexport.doaj.description' => 'Exportar revista para o DOAJ, incluindo dados da revista para inclusão.',
  'plugins.importexport.doaj.export.contact' => 'Solicitar inclusão ao DOAJ',
  'plugins.importexport.doaj.cliUsage' => 'Uso:
{$scriptName} {$pluginName} export [xmlFileName] [journal_path] articles objectId1 [objectId2] ...
',
  'plugins.importexport.doaj.register.error.mdsError' => 'O depósito não foi bem sucedido! A API do DOAJ retornou um erro: \'{$ param}\'.',
  'plugins.importexport.doaj.senderTask.name' => 'Tarefa de registro automático do DOAJ',
  'plugins.importexport.doaj.settings.form.testMode.description' => 'Use a API de teste do DOAJ (do ambiente de teste) para o registro. Por favor, não se esqueça de remover esta opção para a produção.',
  'plugins.importexport.doaj.settings.form.automaticRegistration.description' => 'O OJS depositará artigos automaticamente no DOAJ. Observe que isso pode levar um curto período de tempo após a publicação para processar (por exemplo, dependendo da sua configuração do cronjob). Você pode verificar todos os artigos não registrados.',
  'plugins.importexport.doaj.settings.form.apiKey.description' => 'Você encontrará sua chave API na sua página de usuário no DOAJ.',
  'plugins.importexport.doaj.settings.form.apiKey' => 'Chave API do DOAJ',
  'plugins.importexport.doaj.registrationIntro' => 'Se você deseja registrar artigos a partir do OJS, insira sua chave API do DOAJ. Caso contrário, você poderá exportar para o formato XML do DOAJ, mas não poderá registrar seus artigos no DOAJ a partir do OJS.',
);