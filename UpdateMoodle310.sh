#! /bin/sh
#
#  This GIT installer for macOS is part 
#  of the installation package Moodle4Mac
# 
#  20201102 - Ralf Krause
#

echo
echo "+--------------------------------------------+"
echo "| GIT updater for your local Moodle server"
echo "+--------------------------------------------+"
echo

cd /Applications/MAMP/htdocs

if ! test -e moodle310/.git ; then
    ## the first git update must get everything including .git
    git clone --depth 1 -b MOODLE_310_STABLE git://github.com/moodle/moodle.git moodle310-git
    if test -e moodle310-git ; then
        if test -e moodle310 ; then
            if test -e moodle310/config.php ; then
                cp moodle310/config.php moodle310-git/.
            fi
            DATE=`date +%Y%m%d-%H%M`
            mv moodle310 moodle310-$DATE
        fi
        mv moodle310-git moodle310
    fi
    ## the old folder can be deleted now
    ## if you want to do this please remove '##' from the following line
    ## rm -R moodle310-*
else
    ## the next git update only gets the new files
    cd moodle310
    git pull
    cd ..
fi
