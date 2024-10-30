CREATE TABLE "students"(
    "id" INTEGER,
    "fname" TEXT NOT NULL,
    "lname" TEXT NOT NULL,
    "birth_date" TEXT NOT NULL,
    "gender" TEXT CHECK (gender IN ('male', 'female', 'other')),
    "desc" TEXT,
    PRIMARY KEY ("id")
);