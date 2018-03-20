---
layout: page
title: Our Approach to Security
permalink: /security/
---

<a name="top"></a>
# Our Approach to Security

The following is an attempt to document, in plain language, the Digital Security Exchange's approach to our own digital security -- including our operational security and our secure systems and practices -- as well as the digital security and privacy of our users.

## Contents

* [Threats](#threats)
* [Vetting](#vetting)
* [Platform Management](#management)
* [Operations](#operations)
  * [Development](#development)
  * [Deployment](#deployment)
* [Technical](#technical)
  * [Permissions](#permissions)
  * [Encryption](#encryption)
  * [Monitoring](#monitoring)
    * [Logging](#logging)
    * [Alerting](#alerting)

## Threats <a id="threats"></a><a href="#top"><img src ="/assets/img/arrow.svg" alt="scroll to top" style="width: 20px;"/></a>

Since we're focused on the needs of civil society organizations operating in the United States, Digital Security Exchange (DSX) and its partners face a unique set of threats, vulnerabilities, and challenges.

The DSX, our partners, and the technical services we use are all subject to local and federal law enforcement requests, vulnerable to mass surveillance, and threatened by data breaches and hacking attempts. For these reasons, we take great care in minimizing the amount of data retained by the DSX website and other platforms, including:  

- Hosting DSX infrastructure outside the United States (using [Greenhost](https://greenhost.net/), based in the Netherlands)
- Whenever possible, utilizing encrypted messaging tools, including PGP and Signal, for intra-team communication and correspondence with partners
- Encrypting data submitted via our webforms
- Minimizing the use of 3rd-party tools hosted by U.S. companies, and, whenever possible, developing our own alternatives
- Minimization other forms of data collection, including data about website visitors, information gathered through intake forms, and donation information. More information can be found on our [privacy page](/privacy).

## Vetting <a id="vetting"></a><a href="#top"><img src ="/assets/img/arrow.svg" alt="scroll to top" style="width: 20px;"/></a>

We have a strict vetting policy in place for organizations and providers. We will only match organizations with providers we trust, which means:

- They have been vetted to work collaboratively within relevant communities
- Their values align with [our own](/about)
- They have shown a commitment to and experience working with vulnerable communities
- They have worked previously with our staff, Advisory Committee members, and other DSX providers
- They have demonstrated expertise in customized approaches to digital security

For organizations new to our network, we initiate a series of intake conversations and request references from at least two other organizations (utilizing intake "[modules](/modules)"). Similarly, providers requesting to join the DSX network must be vouched for by at least one existing member of the network, or must provide two references from other organizations with whom they have worked in the past.

If and when we move forward with new and aspiring digital service providers, it will be initially within a discreet “pod” program, in order for all sides to continuously assess fit and expertise.

## Platform Management <a id="management"></a><a href="#top"><img src ="/assets/img/arrow.svg" alt="scroll to top" style="width: 20px;"/></a>

DSX has a very lean management structure. The Director works closely with the Guardian Project (GP), whose Director serves as a primary technical advisor, to manage the frontend website and CiviCDR, the backend ticketing system. The DSX Director provides updates on a regular basis to the Advisory Committee in order to receive strategic feedback on decisions related to the deployment and promotion of online services.

## Operations <a id="operations"></a><a href="#top"><img src ="/assets/img/arrow.svg" alt="scroll to top" style="width: 20px;"/></a>

The Guardian Project (GP) team is currently contracted to design, implement, and manage staging and production infrastructure for the DSX site and the DSX instance of the CiviCDR platform. Admin duties are handled by the primary sysadmin/dev-ops implementor at GP, working in concert with the GP Director and the DSX Director. Only these three people ("DSX-OPS") have access to the server infrastructure, through authenticated access via SSH keys, and second factor authentication, whenever possible.

Currently, communications within DSX-OPS is handled through a Signal group chat, and issues/tasks are logged and discussed through a private Github project (https://github.com/digital-security-exchange/dsx-ops).

### Development <a id="development"></a>

There are two development programs underway currently to support the future DSX online services.

First, is the creation of a primarily static website by [Echo & Co.](https://echo.co), a contracted design and web development firm. The site is implemented using the Jekyll static site generating framework. There is one dynamic portion of the site, with webforms allowing visitors to "Request Assistance." It relies on a PHP script to parse form input, and then to encrypt it, in memory, using the OpenPGP toolkit. The data is stored in an append-only encrypted file, which is retrieved, and deleted, from the server on a regular basis.

The second development program is related to work on, and integration with, the [CiviCDR](https://civicdr.org) ("CDR") platform. CDR is a secure community relationship management (CRM) platform that enables those requesting assistance from DSX to connect to those who can provide assistance. CDR is its own public, shipping open-source software project that DSX is now working, with GP, to support, maintain, and enhance. In the future, the static DSX site's request and provider forms will be directly connected to a DSX-hosted CDR instance.

### Deployment <a id="deployment"></a>

Deployment of the site is handled through an automated, scripted container system. The site content is stored in a [public Github](https://github.com/digital-security-exchange/exchange-new) project, and all work on the site is managed, tracked and logged through that repository. The site is deployed into a read-only location on Greenhost, the DSX hosting provider.

Deploying of new instances of the site is done based on signed tags to the site git repository, and automated through post-commit hooks. A rough outline of the staging and production system is below:

* Serving static site with nginx
* Auto renew LetsEncrypt TLS certs
* rsync-based pull system for fetching the data
* Automated DNS pointing with cloudflare's api
* No logs or minimal privacy preserving logs
* Deployment with an ansible command
* Documentation included

In addition, [Cloudflare](http://cloudflare.com/) is utilized to provide DDoS resilience to the site.

## Technical <a id="technical"></a><a href="#top"><img src ="/assets/img/arrow.svg" alt="scroll to top" style="width: 20px;"/></a>

### Permissions / Access <a id="permissions"></a>

The dynamic PHP script portion of the site is configured to run with as low authority as possible, to only have permission to read the public OpenPGP key required to encrypt data, and to write only to the configured encrypted request log file.

### Encryption <a id="encryption"></a>

All data received by the site -- requests for assistance and requests to join the provider network -- is encrypted in memory from within the PHP script used to receive the content. Encryption is done using a OpenPGP public key resident on the server.

On a regular basis, the DSX Director uses a secure, dedicated machine to retrieve and store the encrypted request-assistance log from the server. This machine holds the OpenPGP private key for decryption, and allows the operator to decrypt the request-assistance log for processing.

### Monitoring <a id="monitoring"></a>

Standard security monitoring, integrity, and threat detection services are utilized on the system. This will integrate with Logging and Alert systems.

#### Logging <a id="logging"></a>

Standard web logs are utilized on the site, but they are minimized to reduce or remove indentifiable information about visitors.

For example, the Apache webserver is configured to log only information that is not fine-grained enough to identify people:

* Only the date is stored, not the time or time zone
* Referrer, IP addresses, and User Agent data are never stored
* Country is stored by looking up the IP Address in the geoip database

Since the raw data is processed by the webserver, the extra information is discarded and never written to disk. Only the sanitized usage tracking information is ever stored. It is possible to do this with Apache, lighttpd, nginx, and probably other webservers. This process is based on the Tor Project’s web tracking approach.

Our goal is to provide value from tracking data without violating anyone’s privacy. Indeed, we prioritize privacy over any value derived from tracking data. Any other party that wants to go follow this route needs to be fully aware that any tracking must be very carefully done, since it can easily result in inadvertent leaks. Do not take this as a stamp of approval on any tracking activity!

#### Alerting <a id="alerting"></a>

Standard server monitoring services is utilized to measure performance and monitor for anomalous events on the server.
