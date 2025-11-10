<?php

class User
{
    public function solve(int $n): void
    {
    }
}

class Student extends User
{
}

class Teacher extends User
{
    public function check_solution(User $user, int $n): void
    {
    }
}

class Admin extends User
{
    public function edit(int $n): void
    {
    }
}

class SuperAdmin extends Admin
{
    public function grant(User $user): void
    {
    }
}
