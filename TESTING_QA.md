# Testing & QA Strategy

## Test Plan Overview

### Test Scope
- Functionality: All features work as designed
- Compatibility: Works on all target browsers/devices
- Performance: Page loads and responds quickly
- Accessibility: WCAG 2.1 AA standards
- Security: Input validation and sanitization

### Test Environment
- **Desktop**: Windows 10/11, MacOS
- **Browsers**: Chrome, Firefox, Safari, Edge
- **Mobile**: iOS (Safari), Android (Chrome)
- **Screen Sizes**: 375px, 768px, 1024px, 1440px, 1920px

---

## Functional Testing

### Navigation & Header (Epic 1)

#### Test Case NAV-001: Logo Display
**Objective**: Verify logo displays correctly
**Precondition**: Landing page loaded
**Steps**:
1. Load index.php
2. Observe top-left navigation bar
3. Verify logo is visible

**Expected**: Logo icon and text visible, properly sized
**Actual**: [To be filled by QA]
**Status**: [ ] PASS [ ] FAIL
**Notes**: [QA notes]

---

#### Test Case NAV-002: Logo Navigation
**Objective**: Verify logo navigates to home
**Precondition**: On any page section
**Steps**:
1. Scroll to middle of page
2. Click logo
3. Observe page behavior

**Expected**: Page scrolls to top (home)
**Actual**: [To be filled]
**Status**: [ ] PASS [ ] FAIL

---

#### Test Case NAV-003: Navigation Links
**Objective**: Verify all navigation links work
**Precondition**: Landing page loaded
**Steps**:
1. Click "Features" link
2. Verify smooth scroll to features section
3. Repeat for "Pricing" and "Contact"

**Expected**: Smooth scroll to each section, active link highlighted
**Actual**: [To be filled]
**Status**: [ ] PASS [ ] FAIL

---

#### Test Case NAV-004: Sign Up Button
**Objective**: Verify Sign Up button navigates to contact form
**Precondition**: Landing page loaded
**Steps**:
1. Click "Sign Up" button
2. Observe page scroll

**Expected**: Smooth scroll to contact form section
**Actual**: [To be filled]
**Status**: [ ] PASS [ ] FAIL

---

### Hero Section (Epic 2)

#### Test Case HERO-001: Headline Display
**Objective**: Verify hero headline displays
**Precondition**: Landing page loaded
**Steps**:
1. View hero section
2. Verify headline text
3. Check font size and color

**Expected**: "The Last POS System You'll Ever Need" visible, large, dark color
**Actual**: [To be filled]
**Status**: [ ] PASS [ ] FAIL

---

#### Test Case HERO-002: Subheadline Display
**Objective**: Verify subheadline is visible and readable
**Precondition**: Hero section visible
**Steps**:
1. View subheadline text
2. Check color and size
3. Verify grammar and spelling

**Expected**: Descriptive text visible, readable, no typos
**Actual**: [To be filled]
**Status**: [ ] PASS [ ] FAIL

---

#### Test Case HERO-003: CTA Button
**Objective**: Verify Get Started button works
**Precondition**: Hero section visible
**Steps**:
1. Click "Get Started for Free" button
2. Observe page behavior

**Expected**: Smooth scroll to contact form
**Actual**: [To be filled]
**Status**: [ ] PASS [ ] FAIL

---

#### Test Case HERO-004: Mockup Animation
**Objective**: Verify device mockup displays and animates
**Precondition**: Hero section visible
**Steps**:
1. View device mockup
2. Wait 5 seconds and observe motion
3. Check dashboard UI inside mockup

**Expected**: Device mockup visible with animations, dashboard UI visible
**Actual**: [To be filled]
**Status**: [ ] PASS [ ] FAIL

---

### Features Section (Epic 3)

#### Test Case FEAT-001: All Features Display
**Objective**: Verify all 4 features are visible
**Precondition**: Features section scrolled into view
**Steps**:
1. Scroll to features section
2. Count feature cards
3. Verify titles: Inventory, Analytics, Integration, Mobile

**Expected**: 4 cards visible, all titles present
**Actual**: [To be filled]
**Status**: [ ] PASS [ ] FAIL

---

#### Test Case FEAT-002: Feature Icons
**Objective**: Verify icons display for all features
**Precondition**: Features section visible
**Steps**:
1. View each feature card
2. Verify icon is visible
3. Check icon is correct for feature

**Expected**: All 4 icons displayed, appropriate for feature
**Actual**: [To be filled]
**Status**: [ ] PASS [ ] FAIL

---

#### Test Case FEAT-003: Feature Hover Effect
**Objective**: Verify hover animation on feature cards
**Precondition**: Features section visible
**Steps**:
1. Hover over feature card
2. Observe card movement/styling

**Expected**: Card lifts up (translateY), shadow increases, border changes
**Actual**: [To be filled]
**Status**: [ ] PASS [ ] FAIL

---

### Pricing Section (Epic 4)

#### Test Case PRICE-001: Three Pricing Tiers
**Objective**: Verify all three pricing tiers display
**Precondition**: Pricing section visible
**Steps**:
1. Scroll to pricing section
2. Count pricing cards
3. Verify titles: Basic, Pro, Enterprise

**Expected**: 3 cards visible, correct titles, prices
**Actual**: [To be filled]
**Status**: [ ] PASS [ ] FAIL

---

#### Test Case PRICE-002: Pro Tier Highlighted
**Objective**: Verify Pro tier is highlighted as most popular
**Precondition**: Pricing section visible
**Steps**:
1. View all three pricing cards
2. Check Pro card styling
3. Verify "Most Popular" badge

**Expected**: Pro card larger/highlighted, badge visible, different color
**Actual**: [To be filled]
**Status**: [ ] PASS [ ] FAIL

---

#### Test Case PRICE-003: Feature Lists Correct
**Objective**: Verify each tier has correct features
**Precondition**: Pricing section visible
**Steps**:
1. Read Basic tier features
2. Read Pro tier features
3. Read Enterprise features
4. Verify accuracy

**Expected**: Features match spec, checkmarks visible, Pro has most, Enterprise unlimited
**Actual**: [To be filled]
**Status**: [ ] PASS [ ] FAIL

---

### Contact Form (Epic 5)

#### Test Case FORM-001: Form Fields Display
**Objective**: Verify contact form fields are visible
**Precondition**: Contact section scrolled into view
**Steps**:
1. Scroll to contact section
2. Observe form fields
3. Count fields: Name, Email, Message

**Expected**: All 3 fields visible with labels
**Actual**: [To be filled]
**Status**: [ ] PASS [ ] FAIL

---

#### Test Case FORM-002: Empty Field Validation
**Objective**: Verify error when submitting empty form
**Precondition**: Contact form visible
**Steps**:
1. Leave all fields empty
2. Click Submit
3. Observe error messages

**Expected**: Red border on fields, error messages: "required"
**Actual**: [To be filled]
**Status**: [ ] PASS [ ] FAIL

---

#### Test Case FORM-003: Invalid Email Validation
**Objective**: Verify email validation
**Precondition**: Contact form visible
**Steps**:
1. Enter name: "John Doe"
2. Enter email: "invalid-email"
3. Enter message: "Test message here for validation"
4. Click Submit

**Expected**: Error message under email: "valid email required"
**Actual**: [To be filled]
**Status**: [ ] PASS [ ] FAIL

---

#### Test Case FORM-004: Short Message Validation
**Objective**: Verify minimum message length
**Precondition**: Contact form visible
**Steps**:
1. Fill valid name and email
2. Enter message: "Short" (5 chars)
3. Click Submit

**Expected**: Error: "Message must be at least 10 characters"
**Actual**: [To be filled]
**Status**: [ ] PASS [ ] FAIL

---

#### Test Case FORM-005: Valid Submission
**Objective**: Verify successful form submission
**Precondition**: Contact form visible
**Steps**:
1. Enter name: "Jane Smith"
2. Enter email: "jane@example.com"
3. Enter message: "I'm interested in learning more about QuickPOS"
4. Click Submit
5. Wait for response

**Expected**: Success message displays, redirects to thank-you.html
**Actual**: [To be filled]
**Status**: [ ] PASS [ ] FAIL

---

#### Test Case FORM-006: Thank You Page
**Objective**: Verify thank you page after submission
**Precondition**: Form successfully submitted
**Steps**:
1. Page redirected to thank-you.html
2. Observe page content
3. Click home button

**Expected**: Thank you message visible, buttons work, home link returns to index
**Actual**: [To be filled]
**Status**: [ ] PASS [ ] FAIL

---

### Footer (Epic 6)

#### Test Case FOOT-001: Footer Display
**Objective**: Verify footer displays on all pages
**Precondition**: Any page loaded
**Steps**:
1. Scroll to bottom
2. Observe footer

**Expected**: Footer visible, contains company info and links
**Actual**: [To be filled]
**Status**: [ ] PASS [ ] FAIL

---

#### Test Case FOOT-002: Social Links
**Objective**: Verify social media links
**Precondition**: Footer visible
**Steps**:
1. Observe social icons
2. Count icons: Facebook, Twitter, LinkedIn, Instagram
3. Hover over each

**Expected**: 4 icons visible, hover effect, not active (for demo)
**Actual**: [To be filled]
**Status**: [ ] PASS [ ] FAIL

---

## Cross-Browser Testing

### Browser Compatibility Matrix

```
┌──────────────┬─────────┬─────────┬─────────┬─────────┐
│ Feature      │ Chrome  │ Firefox │ Safari  │ Edge    │
├──────────────┼─────────┼─────────┼─────────┼─────────┤
│ Navigation   │ ✓       │ ✓       │ ✓       │ ✓       │
│ Hero Section │ ✓       │ ✓       │ ✓       │ ✓       │
│ Features     │ ✓       │ ✓       │ ✓       │ ✓       │
│ Pricing      │ ✓       │ ✓       │ ✓       │ ✓       │
│ Form Submit  │ ✓       │ ✓       │ ✓       │ ✓       │
│ Animations   │ ✓       │ ✓       │ ✓       │ ✓       │
│ Responsive   │ ✓       │ ✓       │ ✓       │ ✓       │
└──────────────┴─────────┴─────────┴─────────┴─────────┘
```

---

## Responsive Design Testing

### Mobile (375px - iPhone SE)

**Test Cases**:
- [ ] Navigation collapses or reorganizes
- [ ] Logo size appropriate for mobile
- [ ] Form fields stack vertically
- [ ] Buttons are touch-friendly (min 44px height)
- [ ] No horizontal scrolling

**Issues Found**: [Log here]

---

### Tablet (768px - iPad)

**Test Cases**:
- [ ] Features grid shows 2 columns
- [ ] Pricing cards arranged properly
- [ ] Form takes 70% width with info on side
- [ ] All text readable

**Issues Found**: [Log here]

---

### Desktop (1440px+)

**Test Cases**:
- [ ] Full 2-column layout for hero
- [ ] Features in 2x2 grid
- [ ] Pricing in 3-column layout
- [ ] Form has info side-by-side
- [ ] All animations smooth

**Issues Found**: [Log here]

---

## Performance Testing

### Load Time Test

**Test**: Measure page load time
```
Target: < 3 seconds
Actual: _____ seconds
Status: [ ] PASS [ ] FAIL
```

### Lighthouse Score

**Test**: Run Lighthouse audit
```
Performance:  Goal 90+, Actual: _____
Accessibility: Goal 95+, Actual: _____
Best Practices: Goal 90+, Actual: _____
SEO: Goal 90+, Actual: _____
```

### Asset Optimization

**Test**: Check file sizes
```
CSS (unminified): < 50KB? [ ] YES [ ] NO
JS (unminified): < 20KB? [ ] YES [ ] NO
Total: < 200KB? [ ] YES [ ] NO
```

---

## Accessibility Testing

### WCAG 2.1 AA Compliance

#### Color Contrast
```
[ ] All text has sufficient contrast (4.5:1 or 3:1 for large text)
[ ] Links are distinguishable from normal text
[ ] No information conveyed by color alone
```

#### Keyboard Navigation
```
[ ] All interactive elements keyboard accessible
[ ] Tab order is logical
[ ] Focus indicator visible
[ ] Form can be filled with keyboard only
```

#### Screen Reader
```
[ ] Page headings properly structured (H1, H2, etc)
[ ] Images have alt text
[ ] Form labels associated with inputs
[ ] ARIA labels where needed
```

#### Text & Content
```
[ ] Font size at least 14px
[ ] Line height at least 1.5
[ ] Language set to English
[ ] No flashing/flickering elements
```

---

## Security Testing

### Input Validation Test

**Test Case**: SQL Injection
```
Input: '); DROP TABLE users; --
Expected: Treated as string, not executed
Status: [ ] PASS [ ] FAIL
```

**Test Case**: XSS Prevention
```
Input: <script>alert('XSS')</script>
Expected: Displayed as escaped text, not executed
Status: [ ] PASS [ ] FAIL
```

**Test Case**: Email Validation
```
Valid: user@example.com ✓
Invalid: user@invalid ✗
Invalid: @example.com ✗
Invalid: user.example.com ✗
```

---

## Bug Report Template

**Bug ID**: [Auto-generated]
**Severity**: [ ] Critical [ ] High [ ] Medium [ ] Low
**Found By**: [QA Name]
**Date**: [Date]
**Sprint**: Sprint 1 / Sprint 2

**Title**: [Brief description]
**Description**: [Detailed description]
**Steps to Reproduce**:
1. ...
2. ...
3. ...

**Expected Result**: [What should happen]
**Actual Result**: [What actually happens]
**Screenshot**: [Attach screenshot]
**Browser/Device**: [Chrome on Windows 10]

**Priority**: [ ] Block Release [ ] Fix Soon [ ] Nice to Have
**Status**: [ ] Open [ ] In Progress [ ] Fixed [ ] Verified
**Assigned To**: [Developer]

**Root Cause**: [If known]
**Solution**: [If known]

---

## Test Execution Schedule

### Sprint 1 Testing
- **Days 1-3**: Unit testing during development
- **Days 4-5**: Integration testing
- **Friday**: Full regression testing

### Sprint 2 Testing
- **Days 1-3**: Unit testing during development
- **Days 4-5**: Integration + regression testing
- **Friday**: Final QA + acceptance testing

---

## Acceptance Criteria Checklist

### Release Checklist
- [ ] All 13 tickets marked DONE
- [ ] No critical bugs
- [ ] No high priority bugs
- [ ] All acceptance criteria met
- [ ] Code reviewed and approved
- [ ] Responsive design tested
- [ ] Cross-browser tested
- [ ] Performance acceptable
- [ ] Security validated
- [ ] Accessibility compliant

---

**Last Updated**: 2025-11-30
**Version**: 1.0
