# Slack Communication & Team Guidelines

## Slack Workspace Setup

### Channels

#### #general
- Announcements
- Company-wide updates
- Non-project discussions

#### #quickpos-team
- **Primary team channel**
- Daily standups
- General team discussions
- Sprint planning notes

#### #quickpos-daily
- **Daily standup bot messages**
- Each team member reports: What I did, What I'll do, Blockers

#### #quickpos-github
- **GitHub integration notifications**
- PR created/merged
- Commits pushed
- Issues created
- Pull request reviews

#### #quickpos-jira
- **Jira integration notifications**
- Tickets created/updated
- Story points assigned
- Status changes
- Sprint updates

#### #quickpos-qa
- **QA & Testing discussions**
- Bug reports
- Test results
- Feature testing updates

#### #quickpos-design
- **Design & UI discussions**
- Screenshot reviews
- Design feedback
- Style guide updates

---

## Daily Standup Format

### Time: 9:00 AM Daily
### Channel: #quickpos-daily

**Use Slack workflow or thread**:

```
🎯 DAILY STANDUP - [Date]

✅ Yesterday I completed:
- [POS-001-T1] Logo HTML structure
- Reviewed PR from John on navigation

🚀 Today I will:
- [POS-001-T2] Logo styling
- Test logo on mobile devices
- Review form validation PR

🚧 Blockers:
- Need clarification on color scheme (in Jira comment)
- Waiting for design assets from Product Owner

📊 Status: ON TRACK
```

### Participation Requirements
- Mandatory daily
- Post by 9:15 AM
- Keep it brief (< 5 minutes read)
- Update blockers immediately
- Respond to team questions

---

## PR Notifications & Code Review Flow

### When PR is Created

**Automatic Slack message** (from GitHub app):
```
[quickpos/quickpos] Pull Request opened: [POS-001-T1] Add logo HTML structure
by @username
#feature  #epic-navigation
```

**Immediate action**: 
1. Comment in Slack thread: "Assigning to @tech-lead for review"
2. Assign PR to Tech Lead on GitHub
3. Tag in #quickpos-github: "@tech-lead please review PR #123"

### Code Review Process in Slack

```
@tech-lead I've updated the PR per your feedback
Changes:
- Fixed mobile responsiveness
- Updated color values
- Added accessibility labels

Ready for re-review
```

### When PR is Approved

**Slack message**:
```
✅ PR approved: [POS-001-T1] Add logo
Ready to merge - @[author] please merge and delete branch
```

### When PR is Merged

**Automatic Slack message** (from GitHub app):
```
[quickpos/quickpos] Pull Request merged: [POS-001-T1] Add logo HTML
by @username
#feature  #epic-navigation
```

**Follow-up in thread**:
```
✅ [POS-001-T1] merged to develop
Jira ticket automatically updated to "Done"
Next: Start [POS-001-T2] Logo styling
```

---

## Jira Integration Notifications

### When Ticket Created

**Slack message**:
```
🎫 [POS-001] Navigation & Header
🎯 Story Point: 5 | Epic: Navigation & Header | Sprint: Sprint 1
📍 Status: OPEN | Assigned to: @john
```

### When Ticket Updated

**Slack message**:
```
🔄 [POS-001] Status changed: IN PROGRESS → IN REVIEW
⏱️  Time spent: 2 hours
Updated by: @john
```

### Sprint Planning Notifications

```
📊 SPRINT 1 PLANNING COMPLETE
🎯 Sprint Points: 26 / 25 (103%)
📅 Duration: Nov 30 - Dec 6
👥 Team: 3 members
🎫 Tickets: 13 stories, 35 tasks
```

---

## Slack Best Practices

### ✅ DO:
- Use threads to keep conversations organized
- @mention people directly when you need response
- Post updates in relevant channels
- Use reactions to acknowledge messages
- Keep tone professional and positive
- Share knowledge and help teammates
- Celebrate completed work

### ❌ DON'T:
- Post duplicate messages in multiple channels
- Direct message instead of using channels (unless personal)
- Leave questions unanswered
- Ignore blockers
- Post unrelated content in project channels
- Use all caps (unless emphasis)
- Spam notifications

---

## Meeting Notes & Documentation

### Sprint Planning Meeting

**Post in #quickpos-team**:
```
📋 SPRINT 1 PLANNING SUMMARY

✅ Completed Today:
- Reviewed backlog
- Estimated 13 stories
- Assigned tickets to team members

🎯 Sprint Commitments:
- Navigation & Header (Epic 1)
- Hero Section (Epic 2)
- Features Section (Epic 3)
Total: 26 story points

🔗 Jira Link: [Board URL]
📅 Duration: Nov 30 - Dec 6
```

### Daily Status Check-in

**If there's an issue**, post in #quickpos-team:
```
⚠️ BLOCKER UPDATE

@tech-lead - Need help with responsive design on mobile

Ticket: [POS-002]
Issue: Navigation breaks on screens < 480px
Screenshots: [attached]
Attempted: Media query @480px

Time blocked: 30 min
Action: Can someone pair program this afternoon?
```

### Sprint Review Summary

**Post in #quickpos-team**:
```
🎉 SPRINT 1 COMPLETE

✅ Completed: 8 tickets
🚀 Deployed: Yes (to develop)
🐛 Bugs Found: 2 (logged in Jira)
📊 Team Velocity: 26 points

Retrospective will follow at 3:00 PM
```

---

## File Sharing & Collaboration

### Screenshots
- Use Slack's screenshot feature
- Always add context (device, browser, issue)
- Thread discussions if detailed

### Documents
- Link to shared Google Doc or GitHub
- Don't copy-paste large blocks
- Summarize key points

### Design Reviews
- Post in #quickpos-design
- Use emoji reactions:
  - ✅ = Approved
  - 👀 = Reviewing
  - 🔄 = Needs changes
  - 💭 = Has questions

---

## Escalation Process

### Minor Issues (Design, Copy)
1. Post in relevant channel
2. Tag the owner
3. Expected response: 1 hour

### Blockers (Technical, Process)
1. Post in #quickpos-team with ⚠️
2. @mention tech lead or product owner
3. Expected response: 15 minutes

### Critical Issues (Production, Security)
1. Post in #quickpos-team with 🚨
2. @mention all leads
3. Schedule immediate sync
4. Expected response: Immediate

---

## Weekly Check-ins

### Monday - Sprint Planning
**Time**: 10:00 AM
**Duration**: 1 hour
**Outcome**: Sprint backlog ready in Jira
**Slack**: Post summary in #quickpos-team

### Wednesday - Mid-Sprint Check
**Time**: 2:00 PM
**Format**: Thread in #quickpos-daily
**Check**: Are we on track for sprint goal?

### Friday - Sprint Review
**Time**: 3:00 PM
**Duration**: 30 minutes
**Format**: Screen share + demo
**Slack**: Post demo link and notes

### Friday - Sprint Retrospective
**Time**: 4:00 PM
**Duration**: 45 minutes
**Outcome**: Action items for next sprint

---

## Communication Templates

### When Starting New Task
```
🚀 Starting [POS-001-T1]
Branch: feature/POS-001-T1-logo
Expected: 2 hours
```

### When Requesting Review
```
👀 Need review on [POS-001-T1]
PR: #123
Time: 15 min estimated
CC: @tech-lead @qateam
```

### When Blocked
```
🚧 BLOCKED: [POS-001-T1]
Issue: Need design file for logo
Waiting for: @product-owner
Action: Can't proceed until tonight
```

### When Asking for Help
```
❓ Need pair programming
Ticket: [POS-004]
Issue: Hero section mockup animation
Who's available: Next 2 hours?
```

---

## Slack App Integrations

### GitHub Notification Preferences
```
/github subscribe quickpos/quickpos pulls
/github subscribe quickpos/quickpos commits:develop
/github subscribe quickpos/quickpos issues
/github subscribe quickpos/quickpos releases
```

### Jira Notification Preferences
```
/jira subscribe QuickPOS
```

### Standup Bot Setup
```
/workflow create
- Trigger: Daily at 9:00 AM
- Questions: What I did, What I'll do, Blockers
- Channel: #quickpos-daily
```

---

## Professionalism & Tone

### Recommended Tone
- Friendly but professional
- Clear and concise
- Emoji use: Moderate (not excessive)
- Respectful of time zones
- Responsive and helpful

### Example Good Slack Messages

✅ **Good**:
```
@john I checked the CSS and it looks good. One small note - 
the mobile breakpoint might need adjustment at 480px. 
I'll send you a screenshot in 5 minutes.
```

❌ **Not ideal**:
```
ur css is broken lol
```

✅ **Good**:
```
We're blocked on the design assets for the hero section.
@product-owner - Can we get the mockup file today?
This is blocking [POS-005] and [POS-006].
```

❌ **Not ideal**:
```
WHERE ARE THE DESIGNS!!!!
```

---

## Privacy & Security

### Don't Share:
- Passwords or API keys in Slack
- Customer personal information
- Business-sensitive data
- Production credentials

### Approved Sharing:
- Jira ticket links
- GitHub PR links
- Generic mockups
- Process documentation
- Non-sensitive screenshots

---

## Recognition & Celebration

When team members complete great work:

```
🎉 Shoutout to @developer-name
Completed [POS-001] Navigation & Header with pixel-perfect design!
Excellent code quality, great communication.
#ProudofThisTeam
```

---

**Last Updated**: 2025-11-30
**Version**: 1.0
