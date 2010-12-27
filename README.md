Showtimes API
=============

Objetivo
--------
Definir uma API de alto nível para implementar e expor horários de sessões de cinema incluindo cinema, filmes e horários. 

SSH Reverse Tunnel
------------------
Passa requisicoes no formato http://showtimes.refilmagem.com.br:9999 para showtimes.dev no localhost para desenvolvimento

* Habilitar 
GatewayPorts yes - arquivo: /etc/ssh/sshd_config depois de salvar service sshd restart

* Verificar no /etc/ssyconfig/iptables 
-A INPUT -p tcp -m tcp --dport 9999 -j ACCEPT 

* Executar na maquina local
ssh -R 9999:showtimes.dev:80 -N -g root@refilmagem.com.br  