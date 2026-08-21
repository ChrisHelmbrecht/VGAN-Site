# How we work on this site

**Source of truth:** this GitHub repository. The live site is a copy of it.

## Roles
- **Claude** owns the code (PHP / CSS / JS). Claude reads this repo, makes
  changes, and hands them back.
- **You** own the binaries (images, videos) and the "publish" action.

## The loop for any change
1. You describe the change (or add a new image/video to `assets/img/`).
2. Claude pulls the latest repo, makes the edit, and gives you back the
   changed files + a one-line commit message.
3. You commit + push (GitHub Desktop: review → commit → push).
4. The host redeploys (or you upload the changed files).

## Adding images / videos
Drop them into `assets/img/` using the filenames the site expects
(see README.md). Commit them once — they then live in the repo and Claude
can see their names and sizes when working. Large video files are fine in
Git for a site this size.

## Rules
- Don't commit real database credentials. `config.php` ships with empty
  creds; if you ever fill them, do it only on the server (or in a file
  named `config.local.php`, which git ignores).
- Every change is one commit, so anything can be rolled back.
