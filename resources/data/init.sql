CREATE TABLE colleges (
    collegeId INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30)
);

CREATE TABLE departments (
    departmentId INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30),
    collegeId INT,
    FOREIGN KEY (collegeId) REFERENCES colleges(collegeId)
);

CREATE TABLE majors (
    majorId INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30),
    departmentId INT,
    collegeId INT,
    FOREIGN KEY (departmentId) REFERENCES departments(departmentId),
    FOREIGN KEY (collegeId) REFERENCES colleges(collegeId)
);

CREATE TABLE advisors (
    advisorId INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(30),
    last_name VARCHAR(30),
    collegeId INT,
    FOREIGN KEY (collegeId) REFERENCES colleges(collegeId)
);

CREATE TABLE students (
    studentId INT AUTO_INCREMENT PRIMARY KEY,
    preferred_name VARCHAR(30),
    last_name VARCHAR(30),
    myid VARCHAR(30),
    majorId INT,
    advisorId INT,
    matric_term INT,
    grad_term INT,
    FOREIGN KEY (majorId) REFERENCES majors(majorId),
    FOREIGN KEY (matric_term) REFERENCES academic_terms(termId),
    FOREIGN KEY (grad_term) REFERENCES academic_terms(termId)
);

CREATE TABLE override_categories (
    overrideId INT AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(30)
);

CREATE TABLE petitions (
    petitionId INT AUTO_INCREMENT PRIMARY KEY,
    item TEXT,
    action TEXT,
    detail TEXT,
    overrideId INT,
    FOREIGN KEY (overrideId) REFERENCES override_categories(overrideId)
);

CREATE TABLE student_plans (
    planId INT AUTO_INCREMENT PRIMARY KEY,
    recommended_courses TEXT,
    alt_courses TEXT,
    advising_term INT,
    current_term INT,
    studentId INT,
    advisorId INT,
    majorId INT,
    departmentId INT,
    collegeId INT,
    FOREIGN KEY (studentId) REFERENCES students(studentId),
    FOREIGN KEY (advisorId) REFERENCES advisors(advisorId),
    FOREIGN KEY (majorId) REFERENCES majors(majorId),
    FOREIGN KEY (departmentId) REFERENCES departments(departmentId),
    FOREIGN KEY (collegeId) REFERENCES colleges(collegeId),
    FOREIGN KEY (advising_term) REFERENCES academic_terms(termId),
    FOREIGN KEY (current_term) REFERENCES academic_terms(termId)
);

CREATE TABLE academic_terms (
    termId INT AUTO_INCREMENT PRIMARY KEY,
    year VARCHAR(30),
    term VARCHAR(30)
);

INSERT INTO academic_terms (`year`, `term`) VALUES ("2021", "spring");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2022", "fall");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2022", "summer");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2022", "fall");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2023", "spring");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2023", "summer");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2023", "fall");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2024", "spring");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2024", "summer");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2024", "fall");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2025", "fall");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2026", "fall");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2027", "fall");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2028", "fall");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2029", "fall");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2030", "fall");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2031", "fall");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2031", "spring");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2030", "spring");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2029", "spring");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2028", "spring");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2027", "spring");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2026", "spring");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2025", "spring");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2031", "summer");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2030", "summer");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2029", "summer");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2028", "summer");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2027", "summer");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2026", "summer");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2025", "summer");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2017", "fall");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2017", "spring");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2017", "summer");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2018", "fall");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2018", "spring");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2018", "summer");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2019", "fall");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2019", "spring");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2019", "summer");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2020", "fall");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2020", "spring");
INSERT INTO academic_terms (`year`, `term`) VALUES ("2020", "summer");


















