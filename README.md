# Projeto-GreenLog
Sistema web fullstack em Laravel, com frontend em Blade (HTML e CSS ) e banco PostgreSQL. Segue como objetivo MVP para gerenciar veículos sustentáveis e registrar viagens logísticas da GreenLog.

#Como foi executado deploy:

 Usando servido em nuvem, aws e o serviço EC2, a instância usa como SO Debian 13, o tipo da estância é m7i-flex.large, oferecendo 2 vCPUs, 8 GiB de RAM e Até 12.5 Gbps de largura de banda, com 16 de armazenamento. tendo como programas para executar o deploy foi: nginx + php-fpm. Para que o DNS ser executado foi usado o programa DDNS.noip, e também adicionar a URL.