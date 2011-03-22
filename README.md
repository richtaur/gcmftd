# Git Commit Message From Todo Diff

So let's say you've got a git repo. Rather than doing something like this:

	git commit -a -m "uh.. what did i do. i did some stuff. worthless commit message"

You can instead use this script, which commits with message generated from the lines removed from `TODO.md` (or whatever file you want). For example:

	alias gcat='~/dev/code/php/gcmftd/exec.php'
	gcat
	git log
	* e92c0f6 Matt Hackett make weapons faster; make them bounce off of walls (4 minutes ago)

## Author

[Matt Hackett](http://richtaur.com/)
