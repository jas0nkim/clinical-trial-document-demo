<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="css/pepper-grinder/jquery-ui-1.8.20.custom.css" />
<style>
    body {
        margin: 20px 20px 20px 20px;
    }

    div#body {
        width: 100%;
    }

    div.spacer {
        height: 10px;
    }

    table {
        text-align: left;
        width: 100%;
    }

    table th {
        width: 30%;
    }

    table td {
        width: 70%;
    }

    textarea {
        width: 100%;
        height: 50px;
    }

    hr.thick {
        border: 0;
        width: 100%;
        color: #f00;
        background-color: #f00;
        height: 5px;
    }

    hr.thin {
        border: 0;
        width: 100%;
        color: #f00;
        background-color: #f00;
        height: 1px;
    }

    span.desc {
        font-weight: normal;
        font-size: 11px;
        color: gray;
    }
</style>
<title>Clinical Trial Document Generator - Demo</title>
</head>
<body>
<div id="body">
    <h1>Clinical Trial Document Generator - Demo</h1>
    <hr class="thick"></hr>
    <div class="spacer">&nbsp;</div>
    <form id="login-form">
        <h3>Profile</h3>
        <table>
            <tbody>
            <tr>
                <th>Title</th>
                <td><select name="profile_title">
                    <option value="Dr.">Dr.</option>
                    <option value="Mr.">Mr.</option>
                    <option value="Ms.">Ms.</option>
                </select></td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td><input type="text" name="firstname" value="Jason" /></td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td><input type="text" name="lastname" value="Kim" /></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><input type="text" name="address" value="100 Sheppard Ave." /></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="text" name="email" value="jason.kim.jiho@gmail.com" /></td>
            </tr>
            <tr>
                <th>Phone number</th>
                <td><input type="text" name="phone" value="416-738-1863" /></td>
            </tr>
            </tbody>
        </table>

        <div class="spacer">&nbsp;</div>
        <hr class="thin"></hr>

        <h3>Templates</h3>
        <h4>Administrative Information</h4>
        <table>
            <tbody>
            <tr>
                <th>Title<br /><span class="desc">Descriptive title identifying the study design, population, interventions, and if applicable, trial acronym.</span></th>
                <td><textarea name="title"></textarea></td>
            </tr>
            <tr>
                <th>Trial registration a)<br /><span class="desc">Trial identifier and registry name. If not yet registered, name of intended registry.</span></th>
                <td><textarea name="registration_a"></textarea></td>
            </tr>
            <tr>
                <th>Trial registration b)<br /><span class="desc">All items from the World Health Organization Trial Registration Data Set.</span></th>
                <td><textarea name="registration_b"></textarea></td>
            </tr>
            <tr>
                <th>Protocol version<br /><span class="desc">Date and version identifier.</span></th>
                <td><textarea name="protocol_version"></textarea></td>
            </tr>
            <tr>
                <th>Funding<br /><span class="desc">Sources and types of financial, material, and other support.</span></th>
                <td><textarea name="funding"></textarea></td>
            </tr>
            <tr>
                <th>Roles and responsibilities a)<br /><span class="desc">Names, affiliations, and roles of protocol contributors.</span></th>
                <td><textarea name="roles_and_resp_a"></textarea></td>
            </tr>
            <tr>
                <th>Roles and responsibilities b)<br /><span class="desc">Name and contact information for the trial sponsor.</span></th>
                <td><textarea name="roles_and_resp_b"></textarea></td>
            </tr>
            <tr>
                <th>Roles and responsibilities c)<br /><span class="desc">Role of study sponsor and funders, if any, in study design; collection, management, analysis, and interpretation of data; writing of the report; and the decision to submit the report for publication, including whether they will have ultimate authority over any of these activities.</span></th>
                <td><textarea name="roles_and_resp_c"></textarea></td>
            </tr>
            <tr>
                <th>Roles and responsibilities d)<br /><span class="desc">Composition, roles, and responsibilities of the coordinating centre, steering committee, endpoint adjudication committee, data management team, and other individuals or groups overseeing the trial, if applicable (see Item 21a for Data Monitoring Committee).</span></th>
                <td><textarea name="roles_and_resp_d"></textarea></td>
            </tr>
            </tbody>
        </table>

        <h4>Introduction</h4>
        <table>
            <tbody>
            <tr>
                <th>Background and rationale a)<br /><span class="desc">Description of research question and justification for undertaking the trial, including summary of relevant studies (published and unpublished) examining benefits and harms for each intervention.</span></th>
                <td><textarea name="bg_and_rationale_a"></textarea></td>
            </tr>
            <tr>
                <th>Background and rationale b)<br /><span class="desc">Explanation for choice of comparators.</span></th>
                <td><textarea name="bg_and_rationale_b"></textarea></td>
            </tr>
            </tbody>
        </table>

        <hr class="thin"></hr>
        <div class="spacer">&nbsp;</div>

        <div><input type="submit" value="Generate Document" /></div>
    </form>
</div>

<!-- javascript -->
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.20.custom.min.js"></script>
<script type="text/javascript" src="js/jui-form.js"></script>
<script type="text/javascript">
    $(function() {
        //$("form").form();

        $("#login-form").submit(function(event) {
            var $form = $(this),
                $inputs = $form.find("input, select, button, textarea"),
                serializedData = $form.serialize();

            // let's disable the inputs for the duration of the ajax request
            $inputs.attr("disabled", "disabled");

            var jqxhr = $.ajax({
                    url: "api/docx/generate.php",
                    type: "POST",
                    data: serializedData
                }).done(function(data) {
                    if (data.success) {
                        setTimeout("window.location = '"+data.filepath+"'" ,1000);
                    } else {
                        alert("Error - "+data.message);

                    }
                }).fail(function() {
                    alert("Error");
                }).always(function() {
                    $inputs.removeAttr("disabled");
                });

            event.preventDefault();
        });
    });
</script>
</body>
</html>