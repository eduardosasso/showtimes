#!/usr/bin/perl

# CouchDB Tunnel Tool for MacOS X and Linux
# Copyright (c) 2010 Linode, LLC
# Author: Philip C. Paradis <pparadis@linode.com>
# Modifications: Sam Kleinman <sam@linode.com>
# Usage: couchdb-tunnel.pl [start|stop]
# Access a CouchDB database instance by way of an SSH tunnel.

## 
## Edit these values to reflect the authentication credentials for the
## server running the CouchDB instance with which you wish to
## connect. If you have chosen to run CouchDB on an alternate port,
## modify the `$remote_port` value. You should not need to modify the
## `$remote_ip` value. 
## 

$remote_user = "root";
$remote_host = "173.255.199.136";
$remote_port = "5984";
$remote_ip   = "127.0.0.1";

##
## Modify these values only if you are running a local CouchDB
## instance. 
## 

$local_ip    = "127.0.0.1";
$local_port  = "5985";

##
## You do not need to edit this file beyond this point. 
## 

$a = shift;
$a =~ s/^\s+//;
$a =~ s/\s+$//;

$pid=`ps ax|grep ssh|grep $local_port|grep $remote_port`;
$pid =~ s/^\s+//;
@pids = split(/\n/,$pid);
foreach $pid (@pids)
{
 if ($pid =~ /ps ax/) { next; }
 split(/ /,$pid);
}

if (lc($a) eq "start")
{
 if ($_[0]) { print "CouchDB tunnel already running.\n"; exit 1; }
 else
 {
  system "ssh -f -L $local_ip:$local_port:$remote_ip:$remote_port $remote_user\@$remote_host -N";
  exit 0;
 }
}
elsif (lc($a) eq "stop")
{
 if ($_[0]) { kill 9,$_[0]; exit 0; }
 else { exit 1; }
}
else
{
 print "Usage: couchdb-tunnel.pl [start|stop]\n";
 exit 1;
}
