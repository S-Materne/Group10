# User Stories

## 1. Student Registration
As a student, I want to register online so that I avoid long queues.

Acceptance Criteria:
- Form must require all fields.
- Ticket code generated automatically.

---

## 2. Unique Ticket Code
As an organizer, I want a unique ticket code so that duplication is prevented.

Acceptance Criteria:
- Code must be generated server-side.
- Code must be stored uniquely in database.

---

## 3. Dashboard Overview
As admin, I want to see total registered and checked-in users.

Acceptance Criteria:
- Dashboard displays counts correctly.

---

## 4. Edit Ticket
As admin, I want to update incorrect attendee information.

Acceptance Criteria:
- Edit form loads existing data.
- Update saves to database.

---

## 5. Public Lookup
As a student, I want to lookup my ticket status.

Acceptance Criteria:
- Ticket code search returns correct result.

---

## 6. Attendance Check-in
As admin, I want to mark ticket as checked-in.

Acceptance Criteria:
- Status changes to checked_in = 1.