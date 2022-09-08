# Git practice 🙌

<img src='../resources/images/practise.gif' alt="recap">

## Aim 🏹

- Git practice :)

- Once you pull the code, before we start working on this weeks exercises, let us create a branch named webreview from our master branch
  - git checkout -b webreview master
- Practise switching between branches
  - git checkout master
  - git checkout webreview
- Ensure that you are on the branch webreview before you start working
  - git checkout webreview
- Work on all the exercises and once done; add to staging area
  - git add .
- Commit changes to local Repository (you can have separate commits for HTML_n_CSS , JavaScript and PHP);
  - git commit -m "Completed exercise ......"
- Merge all work done to master (The --no-ff flag causes the merge to always create a new commit object,This avoids losing information about the historical existence of a feature branch and groups together all commits that together added the feature.)
  - git merge --no-ff webreview
- Delete the branch
  - git branch -d webreview
- Push changes to your online repo
  - git push my-origin master

#### @Refs
- [https://git-scm.com/docs/git-checkout](https://git-scm.com/docs/git-checkout)
- [https://git-scm.com/docs/git-merge](https://git-scm.com/docs/git-merge)
- [https://git-scm.com/docs/git-branch](https://git-scm.com/docs/git-branch)

#### @Credits
- [Image](https://www.nytimes.com/)

> "There is no saint without a past, no sinner without a future." _Augustine of Hippo_