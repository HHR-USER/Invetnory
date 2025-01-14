Git workflow for yii2-filesystem contributors
=======================================

So you want to contribute to yii2-filesystem? Great! But to increase the chances of your changes being accepted quickly, please
follow the following steps. If you are new to Git and GitHub, you might want to first check out [GitHub help](http://help.github.com/), [try Git](https://try.github.com)
or learn something about [Git internal data model](http://nfarina.com/post/9868516270/git-is-simpler).

Setup the development environment
---------------------------------

Assuming you already have a yii2 development environment, carry out the following steps to create a development environment for the repo.

### 1. [Fork](http://help.github.com/fork-a-repo/) the yii2-filesystem repository on GitHub and clone your fork to your development environment 

```
git clone git@github.com:YOUR-GITHUB-USERNAME/yii2-filesystem.git
```

If you have trouble setting up Git with GitHub in Linux, or are getting errors like "Permission Denied (publickey)",
then you must [setup your Git installation to work with GitHub](http://help.github.com/linux-set-up-git/)

> Tip: if you're not fluent with Git, we recommend reading excellent free [Pro Git book](https://git-scm.com/book/en/v2).

### 2. Add the main yii2-filesystem repository as an additional git remote called "upstream"

Change to the directory where you cloned yii2-filesystem, normally, "yii2-filesystem". Then enter the following command:

```
git remote add upstream git://github.com/kartik-v/yii2-filesystem.git
```

### 3. Prepare the testing environment

- You should have a working yii 2 development environment in which you have already installed `yii2-filesystem` and includes latest and updated `yii2-filesystem` fork from source.
- Ensure you have the latest `dev-master` releases of all dependent extensions via your composer updates
- Ensure you use the above cloned latest `yii2-filesystem` code in your testing environment

**Now you have a working playground for hacking on yii2-filesystem.**

Working on bugs and features
----------------------------

Having prepared your development environment as explained above you can now start working on the feature or bugfix.

### 1. Make sure there is an issue created for the thing you are working on if it requires significant effort to fix

All new features and bug fixes should have an associated issue to provide a single point of reference for discussion
and documentation. Take a few minutes to look through the existing issue list for one that matches the contribution you
intend to make. If you find one already on the issue list, then please leave a comment on that issue indicating you
intend to work on that item. If you do not find an existing issue matching what you intend to work on, please
open a new issue or create a pull request directly if it is straightforward fix. This will allow the team to
review your suggestion, and provide appropriate feedback along the way.

> For small changes or documentation issues or straightforward fixes, you don't need to create an issue, a pull request is enough in this case.

### 2. Fetch the latest code from the main yii2-filesystem branch

```
git fetch upstream
```

You should start at this point for every new contribution to make sure you are working on the latest code.

### 3. Create a new branch for your feature based on the current yii2-filesystem master branch

> That's very important since you will not be able to submit more than one pull request from your account if you'll
  use master.

Each separate bug fix or change should go in its own branch. Branch names should be descriptive and start with
the number of the issue that your code relates to. If you aren't fixing any particular issue, just skip number.
For example:

```
git checkout upstream/master
git checkout -b 999-name-of-your-branch-goes-here
```

### 4. Do your magic, write your code

Make sure you have first updated the testing environment as mentioned in [prepare-the-testing-environment][prepare-the-testing-environment]. 

Then make sure you have the updated code with your change and it works :).

Unit tests are always welcome. Tested and well covered code greatly simplifies the task of checking your contributions.
Failing unit tests as issue description are also accepted.

### 5. Update the CHANGE log

Edit the `CHANGE.md` file to include your change, you should insert this at the top of the file under the
first heading (the version that is currently under development), the line in the change log should look like one of the following:

```
Bug #999: a description of the bug fix (Your Name)
Enh #999: a description of the enhancement (Your Name)
```

`#999` is the issue number that the `Bug` or `Enh` is referring to.
The changelog should be grouped by type (`Bug`,`Enh`) and ordered by issue number.

For very small fixes, e.g. typos and documentation changes, there is no need to update the `CHANGE.md`.

### 6. Commit your changes

add the files/changes you want to commit to the [staging area](http://gitref.org/basic/#add) with

```
git add path/to/my/file.php
```

You can use the `-p` option to select the changes you want to have in your commit.

Commit your changes with a descriptive commit message. Make sure to mention the ticket number with `#XXX` so GitHub will
automatically link your commit with the ticket:

```
git commit -m "A brief description of this change which fixes #999 goes here"
```

### 7. Pull the latest yii2-filesystem code from upstream into your branch

```
git pull upstream master
```

This ensures you have the latest code in your branch before you open your pull request. If there are any merge conflicts,
you should fix them now and commit the changes again. This ensures that it's easy for the yii2-filesystem team to merge your changes
with one click.

### 8. Having resolved any conflicts, push your code to GitHub

```
git push -u origin 999-name-of-your-branch-goes-here
```

The `-u` parameter ensures that your branch will now automatically push and pull from the GitHub branch. That means
if you type `git push` the next time it will know where to push to. This is useful if you want to later add more commits
to the pull request.

### 9. Open a [pull request](http://help.github.com/send-pull-requests/) against upstream.

Go to your repository on GitHub and click "Pull Request", choose your branch on the right and enter some more details
in the comment box. To link the pull request to the issue put anywhere in the pull comment `#999` where 999 is the
issue number.

> Note that each pull-request should fix a single change. For multiple, unrelated changes, please open multiple pull requests.

### 10. Someone will review your code

Someone will review your code, and you might be asked to make some changes, if so go to step #6 (you don't need to open
another pull request if your current one is still open). If your code is accepted it will be merged into the main branch
and become part of the next yii2-filesystem release. If not, don't be disheartened, different people need different features and yii2-filesystem
can't be everything to everyone, your code will still be available on GitHub as a reference for people who need it.

### 11. Cleaning it up

After your code was either accepted or declined you can delete branches you've worked with from your local repository
and `origin`.

```
git checkout master
git branch -D 999-name-of-your-branch-goes-here
git push origin --delete 999-name-of-your-branch-goes-here
```

### Command overview (for advanced contributors)

```
git clone git@github.com:YOUR-GITHUB-USERNAME/yii2-filesystem.git
git remote add upstream git://github.com/kartik-v/yii2-filesystem.git
```

```
git fetch upstream
git checkout upstream/master
git checkout -b 999-name-of-your-branch-goes-here

/* do your magic, update changelog if needed */

git add path/to/my/file.php
git commit -m "A brief description of this change which fixes #999 goes here"
git pull upstream master
git push -u origin 999-name-of-your-branch-goes-here
```

[prepare-the-testing-environment]: #3-prepare-the-testing-environment