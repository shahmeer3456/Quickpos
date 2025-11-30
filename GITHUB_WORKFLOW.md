# GitHub Workflow & Process Documentation

## Repository Setup

### Initial Setup
```bash
# Clone the repository
git clone [repository-url] quickpos

# Navigate to project
cd quickpos

# Set up local config
git config user.name "Your Name"
git config user.email "your.email@example.com"

# Create develop branch (if not exists)
git checkout -b develop main

# Push develop branch
git push -u origin develop
```

---

## GitFlow Branching Strategy

### Main Branches
1. **main**: Production-ready code
   - Protected branch - no direct commits
   - Merged from develop via PR
   - Every commit is tagged with version

2. **develop**: Integration branch
   - Contains all completed features
   - Starting point for feature branches
   - Always deployable to staging

### Supporting Branches

#### Feature Branches
**Pattern**: `feature/POS-XXX-description`

```bash
# Create feature branch from develop
git checkout develop
git pull origin develop
git checkout -b feature/POS-001-navigation

# Example commits
git commit -m "[POS-001] Create navigation structure"
git commit -m "[POS-001] Add navigation styling"

# Push feature branch
git push -u origin feature/POS-001-navigation
```

#### Bugfix Branches
**Pattern**: `bugfix/POS-XXX-description`

```bash
# Create bugfix branch from develop
git checkout develop
git checkout -b bugfix/POS-BUG-001-mobile-nav

# Push bugfix branch
git push -u origin bugfix/POS-BUG-001-mobile-nav
```

#### Release Branches (Optional)
**Pattern**: `release/v1.0.0`

```bash
# Create from develop before production release
git checkout develop
git checkout -b release/v1.0.0
```

---

## Commit Message Convention

### Format
```
[TICKET-ID] Brief description (50 characters max)

Optional body: Explanation of changes (wrap at 72 chars)

Related: POS-XXX
Fixes: POS-BUG-XXX
```

### Examples

**Simple commit**:
```
[POS-001-T1] Add logo HTML structure
```

**Commit with body**:
```
[POS-004-T2] Add hero section typography styling

- Style headline with 3.5rem font size
- Set subheadline color to light gray
- Adjust line-height for readability
- Test on mobile devices

Fixes: POS-004
```

**Multiple related tickets**:
```
[POS-002] Implement navigation links and smooth scroll

Related: POS-001
Related: POS-003
```

---

## Pull Request Process

### Step 1: Create Feature Branch
```bash
git checkout develop
git pull origin develop
git checkout -b feature/POS-001-navigation
```

### Step 2: Make Changes & Commits
```bash
# Make your changes
git add .
git commit -m "[POS-001-T1] Add logo HTML structure"

# Continue with more commits
git commit -m "[POS-001-T2] Add logo styling"
```

### Step 3: Push to Remote
```bash
git push -u origin feature/POS-001-navigation
```

### Step 4: Create Pull Request on GitHub

**PR Title Format**:
```
[POS-001] Add Navigation & Header
```

**PR Description Template**:
```markdown
## Description
Brief description of what this PR implements.

## Jira Ticket
[POS-001-Navigation-&-Header](link-to-jira-ticket)

## Type of Change
- [x] New feature
- [ ] Bug fix
- [ ] Breaking change
- [ ] Documentation update

## How Has This Been Tested?
- [ ] Desktop (1920px)
- [ ] Tablet (768px)
- [ ] Mobile (375px)
- [ ] Cross-browser (Chrome, Firefox, Safari)

## Acceptance Criteria Met
- [x] Logo displays in top-left
- [x] Navigation links work
- [x] Sign Up button functional
- [x] Mobile responsive

## Screenshots (if applicable)
[Upload screenshots showing the changes]

## Checklist
- [x] Code follows style guide
- [x] Self-review completed
- [x] No new warnings/errors
- [x] Comments added for complex logic
- [x] Documentation updated
- [x] Responsive design tested
```

### Step 5: Request Review
- Assign to **Tech Lead** for review
- Add labels: `feature`, `epic-name`, `sprint-1`
- Add milestone: `Sprint 1` or `Sprint 2`

### Step 6: Code Review Process

**Reviewer checks**:
- [ ] Code quality and style
- [ ] Functionality meets requirements
- [ ] No console errors
- [ ] Responsive design works
- [ ] Accessibility standards met
- [ ] Performance acceptable
- [ ] Security concerns addressed

**Reviewer feedback**:
- Approved changes and APPROVED PR
- Requested changes with comments
- Commented with suggestions

### Step 7: Address Review Comments
```bash
# Make requested changes
git add .
git commit -m "[POS-001-T2] Update navigation styling per review"
git push origin feature/POS-001-navigation

# Push additional commits as needed
# Do NOT force push unless asked
```

### Step 8: Merge PR
Once approved:
```bash
# GitHub: Click "Squash and merge" or "Merge pull request"
# Then delete the feature branch
```

**Local cleanup**:
```bash
git checkout develop
git pull origin develop
git branch -d feature/POS-001-navigation
```

---

## Conflict Resolution

### When Conflicts Occur

```bash
# Update your branch with latest develop
git fetch origin
git rebase origin/develop

# Resolve conflicts in your code editor
# Then continue rebase
git add .
git rebase --continue

# Push the updated branch
git push -f origin feature/POS-001-navigation
```

### Preventing Conflicts
1. Keep feature branches short-lived (< 1 day of work)
2. Pull develop frequently
3. Coordinate with team on Slack
4. Review Jira board for overlapping work

---

## GitHub Protection Rules

### For `main` branch:
- [x] Require pull request reviews (minimum 1)
- [x] Require status checks to pass
- [x] Require branches to be up-to-date
- [x] Dismiss stale pull requests when new commits pushed
- [x] Require code reviews from code owners

### For `develop` branch:
- [x] Require pull request reviews (minimum 1)
- [x] Allow auto-merge

---

## Integration with Jira

### Automated Links

**In PR description, reference Jira tickets**:
```
Jira: POS-001
Jira: POS-001-T1, POS-001-T2
```

**In commit messages**:
```
[POS-001] Add navigation
[POS-001-T1] Add logo structure
```

**Jira will automatically**:
- Link commits to tickets
- Link PRs to tickets
- Update ticket status when PR is merged

### Updating Ticket Status

**Manual updates in Jira**:
1. When PR created: Move to "In Review"
2. When PR approved: Move to "Approved"
3. When PR merged: Move to "Done"

---

## Deployment Process

### From develop → main

```bash
# Create release PR from develop to main
git checkout develop
git pull origin develop
git checkout -b release/v1.0.0

# Tag release
git tag -a v1.0.0 -m "Release version 1.0.0"

# Push tag
git push origin release/v1.0.0
git push origin refs/tags/v1.0.0
```

### Rollback Process

```bash
# If needed to revert a merge
git revert -m 1 <commit-hash>
git push origin develop
```

---

## Common Git Commands

### Check Status
```bash
# See current branch and changes
git status

# See all branches
git branch -a

# See commit log
git log --oneline -10
```

### Update Branch
```bash
# Fetch latest changes
git fetch origin

# Rebase on develop
git rebase origin/develop

# Or merge develop into your branch
git merge origin/develop
```

### Undo Changes
```bash
# Undo uncommitted changes
git checkout -- <filename>

# Undo last commit (keep changes)
git reset --soft HEAD~1

# Undo last commit (discard changes)
git reset --hard HEAD~1
```

### Stash Changes
```bash
# Save changes temporarily
git stash save "description"

# List stashed changes
git stash list

# Apply stashed changes
git stash apply stash@{0}

# Delete stashed changes
git stash drop stash@{0}
```

---

## Slack Integration

### GitHub Notifications in Slack

**Configure in GitHub Settings**:
1. Go to Slack App Directory → GitHub
2. Authenticate with GitHub
3. Subscribe to notifications:
   - Pull requests created/updated
   - Pull requests merged
   - Issues created/updated
   - Commits pushed
   - Releases published

**Set notification channel**: #quickpos-github

### Slack Commands
```
/github subscribe quickpos/quickpos commits:develop
/github subscribe quickpos/quickpos pulls
/github subscribe quickpos/quickpos issues
```

### Notification Format
```
[quickpos/quickpos] Pull Request opened: [POS-001] Add Navigation
by @username
#feature
```

---

## Branch Protection Best Practices

1. **Always use PRs**: No direct commits to main/develop
2. **Require reviews**: Every change reviewed
3. **Test before push**: Run local tests first
4. **Keep branches clean**: Delete merged branches
5. **Communicate**: Update Slack when creating PRs

---

## Troubleshooting

### PR Has Conflicts
```bash
git checkout develop
git pull origin develop
git checkout feature/POS-001
git merge develop
# Resolve conflicts in editor
git add .
git commit -m "[POS-001] Resolve merge conflicts"
git push origin feature/POS-001
```

### Need to Update After Review
```bash
# Just add more commits - don't create new PR
git add .
git commit -m "[POS-001-T2] Update per review feedback"
git push origin feature/POS-001
```

### Accidentally Committed to Wrong Branch
```bash
git reset --soft HEAD~1  # Undo last commit, keep changes
git checkout -b feature/new-branch
git commit -m "[POS-XXX] Proper commit message"
```

### Merge Conflicts During Rebase
```bash
git rebase --abort      # Cancel rebase
# OR
git rebase --continue   # After resolving conflicts
```

---

## Code Review Checklist

**Everyone must verify**:
- [ ] Jira ticket linked
- [ ] Commit messages have [POS-XXX]
- [ ] Functionality works as described
- [ ] Code style consistent
- [ ] No console errors
- [ ] Mobile responsive
- [ ] Accessibility ok
- [ ] Performance acceptable
- [ ] Security concerns addressed

---

**Last Updated**: 2025-11-30
**Version**: 1.0
