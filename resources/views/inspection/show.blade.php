@extends('layouts.app')

@section('content')
    <?php
    $data = collect(json_decode($inspection->content));
    //echo "<pre>";
    //print_r($data);

    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <h2 class="text-center">Inspection Form</h2>
                <div class="card">

                    <div class="card-header">
                        Collected Data <button class="btn btn-primary float-right" onclick="print();">Print</button>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <td>Inspection Date</td>
                                <td>{{$data["inspection_date"]}}</td>
                            </tr>
                            <tr>
                                <td>Employer Name</td>
                                <td>{{$data["name"]}}</td>
                            </tr>
                            <tr>
                                <td>Employer Address</td>
                                <td>{{$data["address"]}}</td>
                            </tr>
                            <tr>
                                <td>Telephone</td>
                                <td>{{$data["telephone"]}}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{$data["email"]}}</td>
                            </tr>
                            <tr>
                                <td>Industry Classification</td>
                                <td>{{$data["industry_classification"]}}</td>
                            </tr>
                            <tr>
                                <td>Collective Bargaining Agreement: S.I. No</td>
                                <td>{{$data["cbs_si_no"]}}</td>
                            </tr>
                            <tr>
                                <td>Employment Regulations: S.I. No:</td>
                                <td>{{$data["er_si_no"]}}</td>
                            </tr>
                            <tr>
                                <td>Works Council/Plant level Agreement</td>
                                <td>{{$data["plant_level_agreement"]}}</td>
                            </tr>
                        </table>

                        <h6 class="font-weight-bold text-center">Employer Details</h6>
                        <table class="table table-striped">
                            <thead class="table-dark">
                            <tr>
                                <td class="font-weight-bold">Nature of Contract</td>
                                <td class="font-weight-bold">Male</td>
                                <td class="font-weight-bold">Female</td>
                                <td class="font-weight-bold">Total</td>
                            </tr>
                            </thead>
                            <tr>
                                <td>(i) Permanent</td>
                                <td>{{(int)$data["permanent_male"]}}</td>
                                <td>{{(int)$data["permanent_female"]}}</td>
                                <td>{{(int)$data["permanent_male"] + (int)$data["permanent_female"]}}</td>
                            </tr>
                            <tr>
                                <td>(ii) Fixed Contract (a) Seasonal</td>
                                <td>{{(int)$data["contract_seasonal_male"]}}</td>
                                <td>{{(int)$data["contract_seasonal_female"]}}</td>
                                <td>{{(int)$data["contract_seasonal_male"] + (int)$data["contract_seasonal_female"]}}</td>
                            </tr>
                            <tr>
                                <td>(ii) Fixed Contract (a) Casual</td>
                                <td>{{(int)$data["contract_casual_male"]}}</td>
                                <td>{{(int)$data["contract_casual_female"]}}</td>
                                <td>{{(int)$data["contract_casual_male"] + (int)$data["contract_casual_female"]}}</td>
                            </tr>

                            <tr>
                                <td>(iii) Employees under 15 years</td>
                                <td>{{(int)$data["under_15_male"]}}</td>
                                <td>{{(int)$data["under_15_female"]}}</td>
                                <td>{{(int)$data["under_15_male"] + (int)$data["under_15_female"]}}</td>
                            </tr>


                        </table>

                        <h4 class="font-weight-bold text-center">2.Labour Relations (General) (Amendment) Regulations,
                            2003 (No.1)</h4>
                        <h6 class="font-weight-bold text-center">2.1 General Conditions of Employment</h6>
                        <table class="table table-striped">
                            <thead class="table-dark">
                            <tr>
                                <td class="font-weight-bold">Condition of Employment</td>
                                <td class="font-weight-bold">Status</td>
                                <td class="font-weight-bold">Comment</td>
                            </tr>
                            </thead>
                            <?php
                            showTickResponse("(i) Grading and Wages","grading_wages",$data);
                            showTickResponse("(ii) Hours of Work","hours_of_work",$data);
                            showTickResponse("(iii) Short Time Work","short_time_work",$data);
                            showTickResponse("(iv) Special/Annual/Casual Leave","special_leave",$data);
                            showTickResponse("(v) Sick leave","sick_leave",$data);
                            showTickResponse("(vi) Maternity leave","maternity_leave",$data);
                            showTickResponse("(viii) Overtime","overtime",$data);
                            showTickResponse("(ix) Deductions","deductions",$data);
                            showTickResponse("(x) Incentive productions bonus scheme","incentive_productions_bonus_scheme",$data);
                            showTickResponse("(xi) Industrial holidays","industrial_holidays",$data);
                            showTickResponse("(xii) Gratuities","gratuities",$data);
                            showTickResponse("(xiii) Pension Scheme","pension_scheme",$data);
                            showTickResponse("(xiv) Accommodation","accommodation",$data);
                            ?>
                        </table>

                        <h6 class="font-weight-bold text-center">2.2 General Conditions of Employment: Occupational Health and Safety</h6>
                        <table class="table table-striped">
                            <thead class="table-dark">
                            <tr>
                                <td class="font-weight-bold">Condition of Employment</td>
                                <td class="font-weight-bold">Provided for/not provided for</td>
                                <td class="font-weight-bold">Comment</td>
                            </tr>
                            </thead>
                            <?php
                            showTickResponse("(i) Protective Clothing","protective_clothing",$data);
                            showTickResponse("(ii) NSSA–workman’s compensation","nssa_workman_compensation",$data);
                            showTickResponse("(iii) Health and Safety committee","health_and_safetycommittee",$data);
                            ?>
                        </table>

                        <h6 class="font-weight-bold text-center">2.3 General Conditions of Employment: HIV and AIDS</h6>
                        <table class="table table-striped">
                            <thead class="table-dark">
                            <tr>
                                <td class="font-weight-bold">Condition of Employment</td>
                                <td class="font-weight-bold">Provided for/not provided for</td>
                                <td class="font-weight-bold">Comment</td>
                            </tr>
                            </thead>
                            <?php
                            showTickResponse("(i)Accessibility of SI 202 OF 1998","accessibility_of_si_202_of_1998",$data);
                            showTickResponse("(ii) Any HIV and AIDS policy in place (a)Sector (b) Workplace","any_hiv_and_aids_policy_in_place",$data);
                            showTickResponse("(iii) Any HIV and AIDS committee/coordinator","any_hiv_and_aids_commitee",$data);
                            showTickResponse("(iv) Education and awareness of employees","hiv_and_aids_education",$data);
                            showTickResponse("(v) HIV and AIDS risk management","hiv_and_aids_risk_management",$data);
                            showTickResponse("(vi) Any peer educators and councillors","any_peer_educators_and_councillors",$data);
                            showTickResponse("(vii) Medical testing","medical_testing",$data);
                            showTickResponse("(viii) Care and Support","care_and_support",$data);
                            ?>
                        </table>


                        <h6 class="font-weight-bold text-center">3. Operational Institutions/Instruments under the Labour Act</h6>
                        <table class="table table-striped">
                            <thead class="table-dark">
                            <tr>
                                <td class="font-weight-bold">Institution/Instrument</td>
                                <td class="font-weight-bold">Existent/Non-existent</td>
                                <td class="font-weight-bold">Comment</td>
                            </tr>
                            </thead>
                            <?php
                            showTickResponse("(i) Workers committee","workers_committee",$data);
                            showTickResponse("(ii) Works council","works_council",$data);
                            showTickResponse("(iii) Trade Unions: a)Registered(b)Unregistered","trade_unions",$data);
                            showTickResponse("(iv)Employers organisations (a)Registered (b)Unregistered","employers_organisations",$data);
                            showTickResponse("(v) Employment Council","employment_council",$data);
                            showTickResponse("(vi)Employment Code of Conduct: (a)Works Council (b)NEC","employment_code_of_conduct",$data);
                            ?>
                        </table>

                        <h6 class="font-weight-bold text-center">4. Evidence of any offence/contravention</h6>
                        <table class="table table-striped">
                            <thead class="table-dark">
                            <tr>
                                <td class="font-weight-bold">Books or documents/records seized as evidence of offence:</td>
                            </tr>
                            </thead>
                            <tr>
                                <td>{{$data["evidence_of_offence"]}}</td>
                            </tr>
                        </table>
                        <h6 class="font-weight-bold text-center">5. General observations:</h6>
                        <table class="table table-striped">

                            <tr>
                                <td>{{$data["general_observations"]}}</td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    function showTickResponse($title,$check_box,$data)
    {
    ?>
    <tr>
        <td>{{$title}}</td>
        <td><input type="checkbox" <?php if ($data[$check_box] == "true") {
                echo "checked";
            } ?> readonly/></td>
        <td>{{$data[$check_box."_comment"]}}</td>
    </tr>
    <?php } ?>

@endsection
