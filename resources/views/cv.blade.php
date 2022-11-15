<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>{{env('app_name')}}</title>


    <style>
        @page { size: letter landscape; }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box
        }

        body, html {
            height: 100%;
            font-family: sans-serif
        }


        h5 {
            font-size: 16px;
        }

        .font-size-9 {
            font-size: 11px;
        }

        .font-size-10 {
            font-size: 10px;
        }

        .font-size-11 {
            font-size: 11px;
        }

        .font-size-12 {
            font-size: 12px;
        }

        .font-title {
            font-size: 18px;
        }

        .float-right {
            float: right;
            text-align: right;
        }

        .float-left {
            float: left;
            text-align: left;
        }

        .center {
            text-align: center;
        }

        .border1 {
            border: 1px solid;
        }

        table {
            margin: 0 auto;
        }

        /* Default Table Style */
        table {
            color: #333;
            background: white;
            border: 1px solid grey;
            font-size: 12pt;
            border-collapse: collapse;
        }

        table thead th,
        table tfoot th {
            color: #777;
            background: rgba(0, 0, 0, .1);
        }

        table caption {
            padding: .2em;
        }

        table th,
        table td {
            padding: .2em;
        }

        /* Zebra Table Style */
        [data-table-theme*=zebra] tbody tr:nth-of-type(odd) {
            background: rgba(0, 0, 0, .05);
        }

        [data-table-theme*=zebra][data-table-theme*=dark] tbody tr:nth-of-type(odd) {
            background: rgba(255, 255, 255, .05);
        }
    </style>
</head>
<body style="">
<table width="100%" border="0" style="padding: 8px;margin: 8px; border: none;">
    <colgroup>
        <col width="28%">
        <col width="33%">
        <col width="33%">
    </colgroup>
    <tr>
        <td>
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                 alt="avatar"
                 class="rounded-circle img-fluid" style="width: 160px;">

            <h2 style="">MD. Rakibul Islam (BS1065)</h2>
            <table width="100%" class="border1">
                <tr>
                    <td class="float-left">Designation:</td>
                    <td class="float-right">Trainee</td>
                </tr>
                <tr>
                    <td class="float-left">Joining Date:</td>
                    <td class="float-right">3-Jan-22</td>
                </tr>
                <tr>
                    <td class="float-left">Confirmation Date:</td>
                    <td class="float-right">3-May-22</td>
                </tr>
                <tr>
                    <td class="float-left">Years of Experiences:</td>
                    <td class="float-right">0.25</td>
                </tr>
            </table>

            <h4 class="font-title">A. Performance Review</h4>
            <table style="width: 100%;" class="border1" table-layout="fixed">

                <tbody>

                <tr>
                    <td class="float-left">Expertise Area:</td>
                    <td class="float-right">Asp.NET</td>
                </tr>
                <tr>
                    <td class="float-left">Project Name:</td>
                    <td class="float-right">Asp.NET</td>
                </tr>
                <tr>
                    <td class="float-left">Project Duration:</td>
                    <td class="float-right"></td>
                </tr>
                <tr>
                    <td class="float-left">PM Name:</td>
                    <td class="float-right">Md. Abdullah Bin Amin</td>
                </tr>
                <tr>
                    <td class="float-left">SBU Name:</td>
                    <td class="float-right">FinTech</td>
                </tr>
                </tbody>
            </table>
            <table style="width: 100%;" class="border1">
                <thead class="border1">
                <tr>
                    <th class="float-left">Positive Notes</th>
                    <th class="float-right">Improvement Area</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td class="float-left">Lorem ipsum.<br>Lorem ipsum.<br>Lorem ipsum.<br>Lorem ipsum.<br>Lorem ipsum.
                    </td>
                    <td class="float-right">Lorem ipsum dolor.<br>Lorem ipsum.<br>Lorem ipsum.<br>Lorem ipsum.<br>Lorem
                        ipsum.
                    </td>
                </tr>
                </tbody>
            </table>

        </td>
        <td style="vertical-align: top;">
            <h5 class="font-title">B. Employee Evaluation</h5>
            <table class="" style="width: 100%;border: 1px solid;" table-layout="fixed">
                <thead class="">
                <tr class="">
                    <td valign="top" style="width:50%;font-size: 14px;">Tasks</td>
                    <td valign="top" style="width:50%;font-size: 14px;" class="float-right">
                        Status
                    </td>
                </tr>
                </thead>
                <tbody class="">
                <tr class="">
                    <td class="">Quality and accuracy of work (Clean Coding /
                        QA/Support)
                    </td>
                    <td class="float-right">Satisfactory</td>
                </tr>
                <tr>
                    <td class="">Efficiency</td>
                    <td class="float-right">Improvement Required</td>
                </tr>
                <tr>
                    <td class="">Maintaining Disciplined Timing</td>
                    <td class="float-right">Improvement Required</td>
                </tr>
                <tr>
                    <td class="">Adoptability</td>
                    <td class="float-right">Improvement Required</td>
                </tr>
                <tr>
                    <td class="">Work relationships (teamwork and interpersonal
                        communication skills)
                    </td>
                    <td class="float-right">Improvement Required</td>
                </tr>
                <tr>
                    <td class="">Competency in the role</td>
                    <td class="float-right">Improvement Required</td>
                </tr>
                </tbody>
            </table>
            <p class="" style="margin-top: 12px;margin-bottom: 12px;"><b>PM Comment:</b><br>Lorem Ipsum is simply dummy
                text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                ever since the 1500s,</p>

            <table style="width: 100%;border: 1px solid;" table-layout="fixed">
                <tbody>
                <tr>
                    <td class="">PM Recommendation</td>
                    <td class="">Permanent</td>
                </tr>
                <tr>
                    <td class="">PM Recommendation Reason</td>
                    <td class="">m is n an u</td>
                </tr>

                <tr>
                    <td class="">PM Name</td>
                    <td class="">Md Abdullah Bin Amin</td>
                </tr>
                </tbody>
            </table>
        </td>
        <td valign="top">
            <h5 class="font-title">C. Salary Information</h5>

            <table class="">
                <colgroup>
                    <col width="33%">
                    <col width="33%">
                    <col width="33%">
                </colgroup>
                <thead>
                <tr>
                    <th valign="top" class="">Salary Details</th>
                    <th valign="top" class="">Level</th>
                    <th valign="top" class="">Increment</th>
                </tr>
                </thead>
                <tbody>
                <tr>

                    <td class="">Current Salary</td>
                    <th class="">NA</th>
                    <th class="">NA</th>
                </tr>
                <tr>
                    <td class="">Amount of salary revision (if any)</td>
                    <th class="">ICI</th>
                    <th class="">0</th>
                </tr>
                </tbody>
            </table>

            <table class="" style="width: 100%;margin-top: 16px; margin-bottom: 16px;">
                <colgroup>
                    <col width="50%">
                    <col width="50%">
                </colgroup>
                <tbody>
                <tr>
                    <td valign="middle" class="">Effective date of confirmation</td>
                    <td valign="middle" class="">

                    </td>
                </tr>
                </tbody>
            </table>
            <table class="" width="100%" style="margin: 16px 0px;">
                <thead>
                <tr>
                    <td valign="middle" class=""><b>Feedback by HR</b></td>
                    <td valign="middle" class="">Recommendation by permanent role because
                        of strong growth and
                        performance
                    </td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td valign="" class=""><b>Signature</b></td>
                    <td valign="" class="">S.M Sajibul Alam</td>
                </tr>
                </tbody>
            </table>
            <table class="mt-1 table table-bordered ">
                <tbody>
                <tr>
                    <td valign="middle" class=""><b>Feedback by Board Panel</b></td>
                    <td valign="middle" class="">RecommRecommendation by permanent role
                        because of strong growth and
                        performanceendation by permanent role because of strong growth and
                        performance
                    </td>
                </tr>
                <tr>
                    <td valign="middle" class=""><b>Decision By Panel</b></td>
                    <td valign="middle" class=""><b style="font-size: 18px;">Permanent</b></td>
                </tr>
                <tr>
                    <td valign="middle" class=""><b>Signature</b></td>
                    <td valign="middle" class="">MD. Abdullah Bin Amin</td>
                </tr>
                </tbody>
            </table>
            <table class="" width="100%" style="margin: 16px 0px;">
                <colgroup>
                    <col width="50%">
                    <col width="50%">
                </colgroup>
                <tbody>
                <tr>
                    <th valign="middle" colspan="2" style="text-align: center">Approval</th>
                </tr>

                <tr>
                    <th valign="bottom" class="" style="padding-top: 50px;">Masudur Rahman</th>
                    <th valign="bottom" class="" style="padding-top: 50px;">Raisul Kabir</th>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
</table>

</body>
</html>
