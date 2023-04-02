# TacticalRMM

TacticalRMM Plugin for GLPI

This plugin adds a button to computers to enable administrator to access the corresponding computer in Tactical RMM, thus allowing for remote access and other usefull features.

# Install

```
# install
-Inside GLPI's plugins folder create a new folder: tacticalrmm
-Copy files
-Activate
```
# Usage
You need to set the TacticalRMM URL, and select the best field for the GLPI vs TacticalRMM relation.
Currently, this only works with a fork of the TacticalRMM that enables the query parameter "search" (PR already done).

After having the URL configured, a button will appear in the top of the Computer form.

