# Jira Project Setup & Management

## Project Configuration

### Project Details
- **Project Name**: QuickPOS
- **Project Key**: POS
- **Project Type**: Scrum
- **Team Size**: 3 members
- **Sprint Duration**: 1 week

---

## Epic Structure

### Epic 1: Navigation & Header [POS-E1]
**Story Points**: 5
**Sprint**: Sprint 1
**Priority**: High
**Description**: Build sticky navigation bar with logo, menu links, and sign-up button

**User Stories**:
- POS-001: Logo and branding
- POS-002: Navigation links
- POS-003: Sign Up button

---

### Epic 2: Hero Section [POS-E2]
**Story Points**: 8
**Sprint**: Sprint 1
**Priority**: High
**Description**: Create hero section with headline, CTA, and animated mockup

**User Stories**:
- POS-004: Hero content and headlines
- POS-005: POS system mockup

---

### Epic 3: Features Section [POS-E3]
**Story Points**: 8
**Sprint**: Sprint 1
**Priority**: High
**Description**: Display 4 key features in grid layout with icons

**User Stories**:
- POS-006: Feature cards and grid

---

### Epic 4: Pricing Section [POS-E4]
**Story Points**: 10
**Sprint**: Sprint 2
**Priority**: High
**Description**: Three-tier pricing table with feature comparison

**User Stories**:
- POS-007: Pricing cards and tiers
- POS-008: Pricing CTAs

---

### Epic 5: Contact Form [POS-E5]
**Story Points**: 13
**Sprint**: Sprint 2
**Priority**: Critical
**Description**: Contact form with validation and PHP backend

**User Stories**:
- POS-009: Contact form layout
- POS-010: Form validation
- POS-011: PHP backend and submission
- POS-012: Thank you page

---

### Epic 6: Footer [POS-E6]
**Story Points**: 5
**Sprint**: Sprint 2
**Priority**: Medium
**Description**: Footer with company info and social links

**User Stories**:
- POS-013: Footer content and social links

---

## User Story Template

### Story Format

**Story ID**: POS-001
**Epic**: POS-E1 (Navigation & Header)
**Title**: As a visitor, I can see the QuickPOS logo and brand

**Description**:
The landing page should display a professional logo in the top-left corner of the navigation bar. The logo should be visible on all screen sizes and serve as a home link.

**Acceptance Criteria**:
- Logo appears in top-left corner
- Logo displays on all devices (mobile, tablet, desktop)
- Logo is clickable and navigates to home
- Logo includes both icon and text "QuickPOS"
- Professional appearance matches brand

**Story Points**: 2

**Priority**: High

**Definition of Done**:
- [ ] Code merged to develop
- [ ] Pixel-perfect design match
- [ ] Tested on 3+ devices
- [ ] PR reviewed and approved
- [ ] Jira ticket closed
- [ ] No console errors

**Subtasks**:
- [ ] [POS-001-T1] Create logo HTML structure
- [ ] [POS-001-T2] Add logo CSS styling
- [ ] [POS-001-T3] Implement home navigation
- [ ] [POS-001-T4] Test on all devices

**Links**:
- Related: POS-002 (Navigation links)
- Blocks: POS-E1 (Cannot complete Epic 1 without logo)

---

## Task Template

### Task Format

**Task ID**: POS-001-T1
**User Story**: POS-001
**Epic**: POS-E1
**Title**: Create logo HTML structure

**Description**:
Create the HTML markup for the QuickPOS logo including:
- Logo container div
- Font Awesome icon element (cash-register)
- Text "QuickPOS"
- Proper semantic structure

**Acceptance Criteria**:
- HTML is semantic and valid
- Uses Font Awesome icon
- Includes alt text/aria-label
- Proper nesting structure

**Story Points**: 1

**Priority**: High

**Assignee**: [Team member name]

**Definition of Done**:
- [ ] HTML created in index.php
- [ ] Valid HTML5 markup
- [ ] Code peer-reviewed
- [ ] Ready for styling

**Estimate**: 1 hour

**Time Tracking**:
- Estimated: 1 hour
- Actual: [To be filled]

---

## Bug Report Template

### Bug ID: POS-BUG-001
**Epic**: POS-E1 (Navigation & Header)
**Severity**: High
**Priority**: High
**Status**: Open
**Assigned To**: [Team member]

**Title**: Logo overlaps navigation links on mobile

**Description**:
On mobile devices (< 480px), the logo text overlaps with the navigation links, making them unreadable.

**Steps to Reproduce**:
1. Open landing page on mobile device (375px width)
2. Observe navigation bar
3. Logo and nav links are overlapping

**Expected Behavior**:
Logo should be appropriately sized so it doesn't overlap other navigation elements.

**Actual Behavior**:
Logo text (font-size: 1.5rem) causes overlap with nav links.

**Environment**:
- Device: iPhone 12 (375px)
- Browser: Safari
- OS: iOS 15

**Screenshots**:
[Attach screenshot showing issue]

**Possible Solution**:
Reduce logo font-size to 1.2rem at the 480px breakpoint.

**Related Issues**:
- Links to: POS-003 (Sign Up button styling)

**Sprint**: Sprint 1

---

## Jira Board Setup

### Board Columns

```
┌─────────────┬──────────────┬────────────┬──────────┬────────┐
│  BACKLOG    │   TO DO      │  IN PROG   │  REVIEW  │  DONE  │
├─────────────┼──────────────┼────────────┼──────────┼────────┤
│ • POS-014   │ • POS-001    │ • POS-004  │ • POS-02 │ • None │
│ • POS-015   │ • POS-002    │ • POS-005  │          │        │
│ • POS-016   │ • POS-003    │            │          │        │
└─────────────┴──────────────┴────────────┴──────────┴────────┘
```

**Workflow**:
1. **BACKLOG**: Not yet selected for sprint
2. **TO DO**: Selected for sprint, not started
3. **IN PROGRESS**: Developer actively working
4. **IN REVIEW**: Code review/QA testing
5. **DONE**: Completed and merged

---

## Sprint Management

### Sprint 1: Week 1 (Nov 30 - Dec 6)

**Sprint Goal**: Complete Navigation, Hero, and Features sections

**Planned Stories**:
- Epic 1: Navigation & Header (5 pts)
- Epic 2: Hero Section (8 pts)
- Epic 3: Features Section (8 pts)
- **Total: 21 points**

**Team Capacity**: 24 points (3 people × 8 pts each)

**Planned Velocity**: 21 points
**Buffer**: 3 points for unknowns

**Sprint Events**:
- Planning: Monday 10:00 AM (1 hour)
- Daily Standup: 9:00 AM (15 min)
- Mid-Sprint Check: Wednesday 2:00 PM (15 min)
- Review: Friday 3:00 PM (30 min)
- Retrospective: Friday 4:00 PM (45 min)

---

### Sprint 2: Week 2 (Dec 7 - Dec 13)

**Sprint Goal**: Complete Pricing, Contact Form, and Footer sections

**Planned Stories**:
- Epic 4: Pricing Section (10 pts)
- Epic 5: Contact Form (13 pts)
- Epic 6: Footer (5 pts)
- Sprint 1 bug fixes (5 pts)
- **Total: 33 points**

**Planned Velocity**: 28 points (conservative estimate)

**Sprint Events**: Same as Sprint 1

---

## Estimation Guide (Fibonacci Scale)

```
1 point  = ~1 hour        (Very simple, well-understood)
2 points = ~2-4 hours     (Simple, straightforward)
3 points = ~4-8 hours     (Medium, some complexity)
5 points = ~8-16 hours    (Complex, multiple components)
8 points = ~16-24 hours   (Very complex, requires research)
13 points= ~2-3 days      (Extremely complex, dependencies)
```

**Example Estimation**:
- POS-001 (Logo): 2 pts (straightforward HTML/CSS)
- POS-004 (Hero section): 3 pts (multiple elements)
- POS-005 (Mockup animation): 5 pts (requires animation logic)
- POS-011 (PHP backend): 5 pts (validation + database)
- POS-E5 (Contact form epic): 13 pts (multiple tickets)

---

## Status Tracking

### Issue Statuses

- **OPEN**: Ticket created, not yet in sprint
- **TO DO**: In sprint, waiting to start
- **IN PROGRESS**: Developer assigned, actively working
- **IN REVIEW**: Code review/QA testing
- **APPROVED**: Code approved, ready to merge
- **DONE**: Merged to develop/main
- **BLOCKED**: Cannot proceed, waiting for something
- **CANCELLED**: Will not be implemented

### Status Transitions

```
OPEN → TO DO → IN PROGRESS → IN REVIEW → APPROVED → DONE
         ↓                        ↓
      BLOCKED                  BLOCKED
```

---

## Burndown Chart

### Sprint 1 Burndown (Ideal vs Actual)

```
Points
25 |     /
24 |    /
23 |   /
22 |  /
21 | ---- Ideal Line
20 |  \
19 |   \
18 |    \    Actual Progress
17 |     \
16 |      \
15 |       \
   |________
     Mon Tue Wed Thu Fri
```

**How to Read**:
- Y-axis: Remaining story points
- X-axis: Days of sprint
- Goal: Reach 0 points by Friday EOD
- Ideal line: Straight diagonal
- Actual line: Shows real progress

---

## Labels & Tagging

### Issue Labels

```
Priority:
- priority/critical   (Must be done this sprint)
- priority/high       (Should be done this sprint)
- priority/medium     (Nice to have)
- priority/low        (Can wait)

Type:
- type/story          (User story)
- type/task           (Task)
- type/bug            (Bug fix)
- type/test           (Testing)

Epic:
- epic/navigation     (Navigation & Header)
- epic/hero           (Hero Section)
- epic/features       (Features)
- epic/pricing        (Pricing)
- epic/contact        (Contact Form)
- epic/footer         (Footer)

Status:
- status/blocked      (Blocked by something)
- status/review-req   (Needs review)
- status/wip          (Work in progress)

Component:
- component/frontend  (Frontend/UI)
- component/backend   (Backend/PHP)
- component/design    (Design/UX)
- component/testing   (QA/Testing)
```

### Filtering Examples

**Show all high priority tasks for next sprint**:
```
project = POS AND priority = High AND sprint = Sprint2
```

**Show all open bugs**:
```
project = POS AND type = Bug AND status = OPEN
```

**Show my assignments**:
```
project = POS AND assignee = currentUser()
```

**Show work in progress**:
```
project = POS AND status = "IN PROGRESS"
```

---

## Custom Fields

### Story-Specific Fields
- **Epic**: Linked epic
- **Story Points**: Estimation
- **Priority**: High, Medium, Low
- **Sprint**: Sprint 1 or Sprint 2

### Task-Specific Fields
- **Story**: Parent user story
- **Estimate**: Time estimate (hours)
- **Time Spent**: Actual time (hours)
- **Assignee**: Team member

### Bug-Specific Fields
- **Severity**: Critical, High, Medium, Low
- **Reproducibility**: Always, Usually, Sometimes, Rarely
- **Environment**: Device, browser, OS
- **Root Cause**: Why it happened

---

## Team Roles & Permissions

### Product Owner
- **You**
- Permissions: Full access
- Responsibilities:
  - Define features
  - Prioritize backlog
  - Approve completed work
  - Accept/reject deliverables

### Project Manager/QA
- **Team Member 1**
- Permissions: Edit, delete
- Responsibilities:
  - Manage Jira board
  - Run sprint meetings
  - Log bugs
  - Write test cases
  - Track velocity

### Tech Lead
- **Team Member 2**
- Permissions: Edit
- Responsibilities:
  - Manage GitHub
  - Review PRs
  - Define architecture
  - Approve code quality

### Lead Developer
- **Team Member 3**
- Permissions: Edit
- Responsibilities:
  - Write code
  - Create feature branches
  - Submit PRs
  - Implement features

---

## Jira Workflows

### Sprint Planning Workflow

```
1. PM: Create Sprint in Jira
2. Team: Estimate backlog items
3. Team: Commit to sprint goal
4. Team: Assign tickets
5. PM: Update Jira with assignments
6. Team: Move TO DO items to sprint
```

### Daily Work Workflow

```
1. Developer: Pull latest from develop
2. Developer: Create feature branch [POS-XXX]
3. Developer: Move ticket TO IN PROGRESS
4. Developer: Commit with [POS-XXX] message
5. Developer: Push and create PR
6. Tech Lead: Review code
7. Developer: Address feedback
8. Developer: Update ticket IN REVIEW
9. Tech Lead: Approve and merge
10. Developer: Move ticket TO DONE
```

### Sprint Completion Workflow

```
1. Friday AM: Final standup
2. Friday 3PM: Sprint Review (demo)
3. Friday 4PM: Retrospective
4. PM: Update burndown chart
5. PM: Record velocity
6. Team: Plan next sprint
```

---

## Backlog Prioritization

### Backlog Order (Priority)

```
1. POS-001  (Logo) - P0 (Blocking Epic 1)
2. POS-002  (Nav links) - P0 (Blocking Epic 1)
3. POS-003  (Sign Up) - P1
4. POS-004  (Hero content) - P0
5. POS-005  (Mockup) - P1
6. POS-006  (Features) - P2
7. POS-007  (Pricing) - P2
8. POS-008  (Pricing CTAs) - P2
9. POS-009  (Form layout) - P0
10. POS-010 (Form validation) - P0
... (more items)
```

**Prioritization Criteria**:
- Blocking dependencies → High priority
- Critical functionality → High priority
- Nice-to-have features → Medium/Low priority
- Performance improvements → Low priority
- Bug fixes → Based on severity

---

## Integration with GitHub

### Automatic Jira Updates from GitHub

**Commit Message**:
```
[POS-001] Add logo HTML structure
```
→ Jira ticket POS-001 is updated with commit link

**Pull Request Title**:
```
[POS-001] Add logo HTML structure
```
→ Jira ticket linked to PR

**PR Merge**:
```
When PR is merged: Jira ticket transitions to "DONE"
```

### Manual Linking

In Jira ticket, add link:
```
Link PR: https://github.com/[repo]/pull/123
Link Commit: https://github.com/[repo]/commit/[sha]
```

---

## Reporting & Metrics

### Velocity Tracking

**Sprint 1 Expected Velocity**: 21 points
**Sprint 2 Expected Velocity**: 28 points
**Average**: 24.5 points

Use this to plan future sprints.

### Burndown Tracking

Check every day:
- Are we on pace?
- Should we move tickets to next sprint?
- Are blockers preventing progress?

### Cycle Time

Measure time from "TO DO" → "DONE"
Target: < 3 days per ticket

### Bug Escape Rate

Bugs found in QA / Total tickets = %
Target: < 5%

---

## Common Jira Issues & Solutions

### Issue: Tickets getting stuck in "IN REVIEW"
**Solution**: Daily reminder in standup, set WIP limits, pair programming

### Issue: Velocity keeps changing
**Solution**: Better estimation, consistent sprint length, track actual time

### Issue: Backlog gets too large
**Solution**: Prioritize ruthlessly, decompose large items, remove completed items

### Issue: Team doesn't update ticket status
**Solution**: Make it part of daily routine, automate where possible, code review checks status

---

## Jira Settings to Configure

1. **Custom Fields**:
   - Add "Time Estimate" field
   - Add "Time Spent" field
   - Add "Story Points" field

2. **Workflows**:
   - Set up sprint workflow transitions
   - Add status "BLOCKED"
   - Add transitions for "BLOCKED" → "TO DO"

3. **Issue Types**:
   - Story
   - Task
   - Bug
   - Subtask
   - Epic

4. **Board Settings**:
   - Set columns: BACKLOG, TO DO, IN PROGRESS, IN REVIEW, DONE
   - Set WIP limits: 5 for IN PROGRESS, 3 for IN REVIEW
   - Hide BACKLOG column on board

5. **Sprint Settings**:
   - Duration: 1 week
   - Start: Monday
   - End: Friday
   - Auto-close sprint: Yes

---

**Last Updated**: 2025-11-30
**Version**: 1.0
