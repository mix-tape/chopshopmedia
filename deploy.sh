#!/bin/bash
HOST='ftp.hostaway.net.au'
USER='chopshopmedia.com.au'
PASS='Grace321'
TARGETFOLDER='htdocs'
SOURCEFOLDER='./'

lftp -f "
open $HOST
user $USER $PASS
lcd $SOURCEFOLDER
mirror --reverse --verbose $SOURCEFOLDER $TARGETFOLDER
bye
"