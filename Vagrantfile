Vagrant.configure("2") do |config|
    config.vm.box = "ubuntu/trusty64"
 	config.vm.synced_folder   "../test", "/var/www/test/", :owner=> 'www-data', :group=>'www-data', :mount_options => ['dmode=777', 'fmode=777']

    config.vm.provision "shell",
    inline: "/bin/sh /var/www/test/provisioner/provisioner.sh"
end


