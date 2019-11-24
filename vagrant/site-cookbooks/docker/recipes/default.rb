execute "docker-repo" do
  user 'root'
  command 'yum-config-manager --add-repo https://download.docker.com/linux/centos/docker-ce.repo'
  action :run
end

execute "yum-util" do
  user 'root'
  command 'yum install -y yum-utils device-mapper-persistent-data lvm2'
  action :run
end

execute "docker-ce" do
  user 'root'
  command 'yum install -y docker-ce'
  action :run
end

execute "usermod" do
  user 'root'
  command 'usermod -aG docker vagrant'
  action :run
end

service "docker" do
  supports status: true, restart: true, reload: true
  action [:enable, :start]
end

execute "docker-compose-install" do
  user 'root'
  command 'curl -L https://github.com/docker/compose/releases/download/1.12.0/docker-compose-`uname -s`-`uname -m` > docker-compose && mv docker-compose /usr/local/bin/docker-compose'
  action :run
end

execute "chmod" do
  user 'root'
  command 'chmod +x /usr/local/bin/docker-compose'
  action :run
end