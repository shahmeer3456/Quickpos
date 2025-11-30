# Code Review Checklist & Standards

## Pre-Review Checklist (Author)

Before requesting review, verify:

### Functional Requirements
- [ ] Feature works as described in Jira ticket
- [ ] All acceptance criteria are met
- [ ] No known bugs introduced
- [ ] Form validation works (if applicable)
- [ ] Links and buttons are functional
- [ ] Database operations work (if applicable)

### Code Quality
- [ ] Code follows project style guide
- [ ] Variable names are clear and descriptive
- [ ] Comments explain "why", not "what"
- [ ] No dead code or commented-out code
- [ ] DRY principle applied (no code duplication)
- [ ] Functions are focused and single-purpose

### Testing & Performance
- [ ] Tested on desktop (1920px, 1440px)
- [ ] Tested on tablet (768px)
- [ ] Tested on mobile (375px, 414px)
- [ ] Cross-browser tested (Chrome, Firefox, Safari)
- [ ] Touch events work on mobile
- [ ] No console errors or warnings
- [ ] Performance acceptable (< 3s load time)

### Accessibility & UX
- [ ] ARIA labels added where needed
- [ ] Color contrast meets WCAG standards
- [ ] Keyboard navigation works
- [ ] Focus states visible
- [ ] Error messages clear and helpful
- [ ] Success states obvious

### Security
- [ ] Input sanitization applied (PHP)
- [ ] XSS vulnerabilities prevented
- [ ] CSRF protection in place (if needed)
- [ ] No hardcoded credentials
- [ ] Sensitive data not logged

### Documentation
- [ ] Code comments added for complex logic
- [ ] README updated (if needed)
- [ ] Jira ticket updated with progress
- [ ] Commit messages meaningful and linked to ticket

---

## Code Review Process (Reviewer)

### Step 1: Understand the Change
- [ ] Read Jira ticket and acceptance criteria
- [ ] Understand the business requirement
- [ ] Check if approach is appropriate
- [ ] Ask for clarification if needed

### Step 2: Code Review
- [ ] Commits have [POS-XXX] ticket number
- [ ] Code follows style guide
- [ ] No console errors or warnings
- [ ] Logic is correct and efficient
- [ ] No security vulnerabilities
- [ ] No breaking changes to existing code

### Step 3: Test Locally (if possible)
- [ ] Clone the PR branch
- [ ] Run the application
- [ ] Test described functionality
- [ ] Try to break it intentionally
- [ ] Check responsive design
- [ ] Verify form validation
- [ ] Test on different browsers

### Step 4: Check Completeness
- [ ] All files necessary are included
- [ ] No merge conflicts
- [ ] Builds successfully
- [ ] Tests pass
- [ ] Documentation updated
- [ ] Ticket acceptance criteria met

### Step 5: Provide Feedback

**Approval Categories**:

#### ✅ APPROVED
- Code quality excellent
- All requirements met
- No concerns
- Ready to merge

#### 👀 REVIEW REQUESTED
- Minor issues found
- Author needs to address comments
- Re-review after changes

#### 🚫 REQUESTED CHANGES
- Significant issues found
- Cannot approve until fixed
- Author must address all comments

---

## Common Issues to Look For

### Code Quality Issues
- [ ] Inconsistent indentation
- [ ] Missing semicolons
- [ ] Unused imports
- [ ] Magic numbers without constants
- [ ] Long functions (> 50 lines)
- [ ] Complex nested conditions
- [ ] No error handling

### Design Issues
- [ ] Inconsistent with design system
- [ ] Colors not matching spec
- [ ] Spacing/padding incorrect
- [ ] Responsive design broken
- [ ] Typography not matching

### Functionality Issues
- [ ] Form validation missing
- [ ] Edge cases not handled
- [ ] Error messages unhelpful
- [ ] Loading states missing
- [ ] Buttons not working

### Performance Issues
- [ ] Images not optimized
- [ ] Unused CSS/JS files
- [ ] Blocking resources
- [ ] Excessive DOM manipulation
- [ ] No caching strategy

### Security Issues
- [ ] XSS vulnerabilities
- [ ] Unvalidated input
- [ ] Exposed credentials
- [ ] No CSRF protection
- [ ] SQL injection risk

---

## Review Comments Examples

### ✅ Good Review Comments

**Specific and actionable**:
```
The logo position looks good on desktop, but on mobile it's 
overlapping the nav links. Try reducing the font-size to 1.2rem 
at the 480px breakpoint. See media query example below:

@media (max-width: 480px) {
  .logo {
    font-size: 1.2rem;
  }
}
```

**Asks clarifying questions**:
```
I see you're using a fixed height for the hero section. 
What happens if the headline wraps to 3 lines on mobile? 
Should we use min-height instead to accommodate content?
```

**Acknowledges good work**:
```
Great job on the form validation! The error messages are 
clear and helpful. I especially like how you highlight 
the invalid fields with red borders.
```

### ❌ Unhelpful Review Comments

**Vague**:
```
This doesn't look right.
```

**Unclear**:
```
Fix the styling.
```

**Mean-spirited**:
```
This code is garbage.
```

---

## Response to Review Comments

### When You Agree
```
You're absolutely right. I'll update the mobile breakpoint 
to use min-height. Pushing updated commit now.
```

### When You Disagree (Respectfully)
```
I see your point, but in this case I chose fixed height 
because the headline is always 1-2 lines. The height value 
(200px) provides a consistent look across devices. 
What do you think?
```

### When You Need Clarification
```
Thanks for the feedback! I want to make sure I understand - 
are you suggesting changing the breakpoint from 480px to 768px, 
or adjusting the font size value? Let me know and I'll update.
```

---

## Review Approval Criteria

### Ready to Merge ✅
- [ ] All acceptance criteria met
- [ ] Code quality excellent
- [ ] No console errors
- [ ] Responsive design verified
- [ ] Cross-browser tested
- [ ] Accessibility standards met
- [ ] Performance acceptable
- [ ] Security checked
- [ ] Documentation complete

### Needs More Work 🚫
- [ ] Acceptance criteria not met
- [ ] Console errors present
- [ ] Responsive design broken
- [ ] Browser compatibility issues
- [ ] Accessibility standards violated
- [ ] Performance concerning
- [ ] Security vulnerabilities present
- [ ] Documentation incomplete

---

## Team Review Standards

**For Navigation/Header (Epic 1)**:
- Must test on 4+ screen sizes
- Must verify smooth scroll behavior
- Must check accessibility (ARIA labels)
- Must confirm hover states work

**For Hero Section (Epic 2)**:
- Must verify responsive image/mockup
- Must check animation performance
- Must test CTA button functionality
- Must confirm layout on mobile

**For Features Section (Epic 3)**:
- Must verify grid layout at breakpoints
- Must test hover animations
- Must check icon loading
- Must confirm card alignment

**For Pricing Section (Epic 4)**:
- Must verify pricing display accuracy
- Must test button states
- Must check responsive pricing grid
- Must confirm badge positioning

**For Contact Form (Epic 5)**:
- Must test all form validations
- Must verify error message display
- Must test form submission
- Must confirm redirect to thank-you page
- Must verify PHP sanitization

**For Footer (Epic 6)**:
- Must verify all social icons load
- Must test social media links
- Must check footer positioning (sticky/relative)
- Must verify responsive footer layout

---

## Escalation Process

### If Review is Stalled
- Wait 24 hours for initial review
- Post reminder in Slack
- Tag reviewer in PR comment
- If still no response after 48 hours, escalate to Tech Lead

### If Disagreement on Implementation
- Have brief discussion in PR comments
- If unresolved, schedule 15-min sync
- Tech Lead makes final decision
- Implement agreed approach

### If Major Issues Found
- Mark PR as "Requested Changes"
- Document issues clearly
- Provide specific guidance on fixes
- Be available to pair program if needed

---

## Performance Check List

**CSS Performance**:
- [ ] No unused CSS rules
- [ ] Critical CSS prioritized
- [ ] Minimal specificity
- [ ] Classes used efficiently

**JavaScript Performance**:
- [ ] No blocking scripts
- [ ] Events delegated properly
- [ ] DOM queries minimized
- [ ] No memory leaks

**Asset Performance**:
- [ ] Images optimized and compressed
- [ ] Lazy loading implemented
- [ ] Fonts cached properly
- [ ] CDN used where possible

---

## Documentation Review

**Check README.md**:
- [ ] Setup instructions clear
- [ ] Dependencies listed
- [ ] File structure documented
- [ ] API endpoints documented
- [ ] Configuration options explained

**Check Code Comments**:
- [ ] Complex logic explained
- [ ] "Why" documented, not "what"
- [ ] No outdated comments
- [ ] Comments are helpful

**Check Commit Messages**:
- [ ] Ticket numbers included
- [ ] Messages are descriptive
- [ ] Related issues referenced

---

**Last Updated**: 2025-11-30
**Version**: 1.0
