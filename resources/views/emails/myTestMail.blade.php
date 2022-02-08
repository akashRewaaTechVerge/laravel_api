<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <link href='https://fonts.googleapis.com/css?family=Dosis:400,500,600,700' rel='stylesheet' type='text/css'>
        <style>
        body {
            font-family: 'Dosis', sans-serif;
            font-size:14px;
            color: #333;
        }
        #table-wrap {
            background:#fafafa;
            border-bottom: 5px solid #eee;
            border-top: 5px solid #EC4F48;
        }
        #site_logo{
            background: #EC4F48; 
            border-bottom: 2px solid #EC4F48;
            -webkit-border-bottom-right-radius: 2px;
            -webkit-border-bottom-left-radius: 2px;
            -moz-border-radius-bottomright: 2px;
            -moz-border-radius-bottomleft: 2px;
            border-bottom-right-radius: 2px;
            border-bottom-left-radius: 2px;
        }
        </style>        
    </head>
    <body>
        <h2>User Detail</h2>    
        <table id="table-wrap" width="100%">

            <thead>
                <th>Full-Name</th>
                <th>Email</th>
                <th>contact</th>
                <th>experience</th>
                <th>Current_Salary</th>
                <th>Expected_Salary</th>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align: center;"> {{ $details['fullname'] }} </td>
                    <td style="text-align: center;"> {{ $details['email'] }} </td>
                    <td style="text-align: center;"> {{ $details['contact'] }} </td>
                    <td style="text-align: center;"> {{ $details['experience'] }} </td>
                    <td style="text-align: center;"> {{ $details['current_salary'] }} </td>
                    <td style="text-align: center;"> {{ $details['expected_salary'] }} </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>