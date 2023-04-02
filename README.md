# Tactical RMM Plugin for GLPI

This plugin adds a button to computers to enable administrator to access the corresponding computer in Tactical RMM, thus allowing for remote access and other usefull features.


### What is Tactical RMM?
Tactical RMM is a remote monitoring & management tool, built with Django and Vue.

More on: https://github.com/amidaware/tacticalrmm

### What is GLPI?
GLPI stands for Gestionnaire Libre de Parc Informatique is a Free Asset and IT Management Software package, that provides ITIL Service Desk features, licenses tracking and software auditing.

More on: http://glpi-project.org

# Install

- Inside GLPI's plugins folder create a new folder: tacticalrmm
- Copy files
- Activate


# Usage
You need to set the TacticalRMM URL, and select the best field for the GLPI vs TacticalRMM relation.
Currently, this only works with a fork of the TacticalRMM that enables the query parameter "search" (PR already done).

After having the URL configured, a button will appear in the top of the Computer form.


TacticalRMM-Web fork: https://github.com/jpros/tacticalrmm-web 


# Author

JP Ros - Discord: ros#2144