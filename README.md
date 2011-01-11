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

Instalar Pear Mail
------------------
sudo pear install Mail-1.2.0
sudo pear install Net_SMTP-1.4.4
sudo pear install Mail_Mime-1.8.1

Cron
----
curl http://showtimes.dev/cron/discover-cinemas.php
curl http://showtimes.dev/cron/update-showtimes.php

curl http://173.255.199.136/cron/discover-cinemas.php
curl http://173.255.199.136/cron/update-showtimes.php

PHP
---
Colocar memory_limit alto 

CouchDB Local
-------------
./couchdb-tunnel.pl start
http://localhost:5985/_utils/index.html

CouchDB Views
-------------
* cinemas/cinemas 
function(doc) {
if (doc.movies)
  emit(doc._id, doc);
}

* subscribers/subscribers
function(doc) {
if (doc.callback)
  emit(doc._id, doc);
}

Estrutura de um Subscriber
--------------------------
{
   "_id": "refilmagem",
   "_rev": "4-80453c1f40cd99b57daaaeadb734e4ff",
   "name": "Refilmagem",
   "email": "eduardo@refilmagem.com.br",
   "callback": "http://refilmagem.dev/config/update-showtimes"
}