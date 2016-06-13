from __future__ import with_statement
from fabric.api import *
from fabric.contrib.files import exists
from fabric.operations import local as lrun, run
from fabric.context_managers import env
from pprint import pprint
import os
import pdb
import sys

cms = 'wordpress'
cms_version = "latest"
file_ext = "zip"
cms_download_filename = "%s-%s.%s" % (cms,cms_version,file_ext)
cms_download_url = "https://wordpress.org/latest.zip"

root_dir = "/vagrant/htdocs"
download_path = "%s/%s" % ("/tmp/",cms)

@task
def localhost():
    env.run = lrun
    env.hosts = ['localhost']
    env.use_sudo = True
    env.password = 'vagrant'

@task
def execute(*args, **kwargs):
    if env.use_sudo:
        sudo(*args, **kwargs)
    else:
        run(*args, **kwargs)

@task
def init():
    execute("mkdir -p %s" % (download_path))
    with cd(download_path):
        if os.path.isfile(cms_download_filename):
            execute("rm %s > /dev/null" % (cms_download_filename))
        execute("wget %s -O %s" % (cms_download_url, cms_download_filename))
        execute("unzip %s" % (cms_download_filename))
        execute("rsync -av ./%s/ %s/" % (cms,root_dir))        
        execute("mkdir -p %s/wp-content/uploads" % (root_dir))
        execute("chmod -R 777 %s" % (root_dir))