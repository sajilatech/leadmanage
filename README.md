1. git checkout
	git main

2. GIT ADD

	git add .

OR add specific files:

	git add filename.php style.css

3. COMMIT CHANGES
	git commit -m "Your commit message here"

4. . Push to the remote repository

	git push

	OR NOT YET LINKED REMOTE 

	git push

5. 5. If remote isn’t set yet

	git remote add origin https://github.com/PSAnsa/FlightBus.git

	git push origin main

	git push -u origin main

6.  Quick one-liner (if everything is already set up):

git add . && git commit -m "update" && git push

7.set one git link to another
	git remote set-url origin https://github.com/sajilatech/leadmanagementsystem.git

8. git pull origin main --rebase
git push origin main

git pull --rebase will fetch the remote commits and reapply your commits on top, avoiding unnecessary merge commits.

Then you can push cleanly.





