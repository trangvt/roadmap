https://help.ubuntu.com/community/FilePermissions

What does S in linux file properties mean?
	https://serverfault.com/questions/445193/what-does-s-in-linux-file-properties-mean
	drwxrws---

u: user
g: group
o: other

d rwx rwx r-x  775
d rwx rwx ---  770
- rw- rw- ---  660
d rwx rws ---
g	sudo chmod g+rws vendor/
