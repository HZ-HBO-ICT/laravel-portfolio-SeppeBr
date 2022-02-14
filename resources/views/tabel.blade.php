@extends('layout')

@section('content')

    <table border="1">
        <tr>
            <th>Quartile</th>
            <th>Course</th>
            <th>EC</th>
            <th>Exam</th>
            <th>Grade</th>
        </tr>
        <tr>
            <td rowspan="3">1</td>
            <td>Programme and Career Orientation</td>
            <td>2.5</td>
            <td>Assessment exams</td>
            <td></td>
        </tr>
        <tr>
            <td>Computer Science Basics</td>
            <td>5</td>
            <td>Written exam</td>
            <td></td>
        </tr>
        <tr>
            <td>Programming Basics</td>
            <td>5</td>
            <td>Case study exam</td>
            <td></td>
        </tr>
        <tr>
            <td rowspan=2">2</td>
            <td rowspan=2">Object Oriented Programming</td>
            <td rowspan=2">10</td>
            <td>Case study</td>
            <td></td>
        </tr>
        <tr>
            <td>Project</td>
            <td></td>
        </tr>
        <tr>
            <td rowspan=4">3</td>
            <td>Framework Development</td>
            <td>5</td>
            <td>Case study</td>
        </tr>
        <tr>
            <td rowspan=3">Framework Project 1</td>
            <td rowspan=3">7,5</td>
            <td>Project</td>
            <td></td>
        </tr>
        <tr>
            <td>Assessment</td>
            <td></td>
        </tr>
        <tr>
            <td>Report</td>
            <td></td>
        </tr>
        <tr>
            <td rowspan=4">4</td>
            <td rowspan=4">Framework Project 2</td>
            <td rowspan=4">10</td>
        </tr>
        <tr>
            <td>Portfolio</td>
            <td></td>
        </tr>
        <tr>
            <td>Project</td>
            <td></td>
        </tr>
        <tr>
            <td>Assessment</td>
            <td></td>
        </tr>
        <tr>
            <td rowspan=2">1-4</td>
            <td>Personal Pofessional Development</td>
            <td>12,5</td>
            <td>Portfolio</td>
        </tr>
        <tr>
            <td>Personality</td>
            <td>2,5</td>
            <td>Portfolio</td>
            <td></td>
        </tr>

    </table>
@endsection
