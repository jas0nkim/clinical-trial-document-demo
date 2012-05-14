<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="css/pepper-grinder/jquery-ui-1.8.20.custom.css" />
<style>
    body { margin: 20px 20px 20px 20px; font-family: Trebuchet MS,Tahoma,Verdana,Arial,sans-serif; }
    div#body { width: 100%; }
    div.spacer { height: 10px; }
    table { text-align: left; width: 100%; }
    table th { width: 30%; }
    table td { width: 70%; }
    textarea { width: 100%; height: 100px; }
    input[type=text], select { font-size: 0.7em; }
    hr.thick { border: 0; width: 100%; color: #f00; background-color: #f00; height: 5px; }
    hr.thin { border: 0; width: 100%; color: #f00; background-color: #f00; height: 1px; }
    span.desc { font-weight: normal; font-size: 0.7em; color: gray; }

    /* jquery ui */
    #sortable { list-style-type: none; margin: 0; padding: 0; width: 100%; }
    #sortable li { margin: 0 5px 5px 5px; padding: 5px; font-size: 1.0em; height: 1.2em; cursor: pointer; }
    html>body #sortable li { height: 1.2em; line-height: 1.0em; }
    .ui-state-highlight { height: 1.2em; line-height: 1.0em; }
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
                <td><select name="profile_title" class="ui-state-default">
                    <option value="Dr.">Dr.</option>
                    <option value="Mr.">Mr.</option>
                    <option value="Ms.">Ms.</option>
                </select></td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td><input type="text" name="firstname" value="Jason" class="ui-state-default" /></td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td><input type="text" name="lastname" value="Kim" class="ui-state-default" /></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><input type="text" name="address" value="100 Sheppard Ave." class="ui-state-default" /></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="text" name="email" value="jason.kim.jiho@gmail.com" class="ui-state-default" /></td>
            </tr>
            <tr>
                <th>Phone number</th>
                <td><input type="text" name="phone" value="416-738-1863" class="ui-state-default" /></td>
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
                <td><textarea class="ui-state-default" name="title">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</textarea></td>
            </tr>
            <tr>
                <th>Trial registration a)<br /><span class="desc">Trial identifier and registry name. If not yet registered, name of intended registry.</span></th>
                <td><textarea class="ui-state-default" name="registration_a">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </textarea></td>
            </tr>
            <tr>
                <th>Trial registration b)<br /><span class="desc">All items from the World Health Organization Trial Registration Data Set.</span></th>
                <td><textarea class="ui-state-default" name="registration_b">Duis eget lorem ac odio lobortis suscipit nec et neque. Sed at quam ut mauris scelerisque congue id eget dui. Quisque tellus lectus, tristique eu posuere in, faucibus vitae urna. Duis vitae orci purus, quis euismod augue. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Morbi lorem arcu, aliquet sed feugiat et, posuere non elit fusce sollicitudin.  Nunc at in hendrerit in vulputate, imperdiet fringilla.</textarea></td>
            </tr>
            <tr>
                <th>Protocol version<br /><span class="desc">Date and version identifier.</span></th>
                <td><textarea class="ui-state-default" name="protocol_version">Aliquam mauris felis, viverra in mattis vitae adipiscing elit, sed diam nonummy nibh.  Euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue. Proin dapibus hendrerit purus sed dictum.</textarea></td>
            </tr>
            <tr>
                <th>Funding<br /><span class="desc">Sources and types of financial, material, and other support.</span></th>
                <td><textarea class="ui-state-default" name="funding">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Suspendisse vel tortor non dolor, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.Cras a nisl nec enim luctus vehicula eu magna aliquam erat volutpat.</textarea></td>
            </tr>
            <tr>
                <th>Roles and responsibilities a)<br /><span class="desc">Names, affiliations, and roles of protocol contributors.</span></th>
                <td><textarea class="ui-state-default" name="roles_and_resp_a">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</textarea></td>
            </tr>
            <tr>
                <th>Roles and responsibilities b)<br /><span class="desc">Name and contact information for the trial sponsor.</span></th>
                <td><textarea class="ui-state-default" name="roles_and_resp_b">Donec pellentesque, lacus in venenatis suscipit, mi arcu consectetur leo, vulputate congue dolor eros ut sapien. Mauris erat quam, amet convallis ac, vulputate ultricies orci. Vestibulum porta iaculis felis, eget tristique ante egestas quis. Sed non quis, convallis felis. Etiam id elit id elit dapibus blandit.</textarea></td>
            </tr>
            <tr>
                <th>Roles and responsibilities c)<br /><span class="desc">Role of study sponsor and funders, if any, in study design; collection, management, analysis, and interpretation of data; writing of the report; and the decision to submit the report for publication, including whether they will have ultimate authority over any of these activities.</span></th>
                <td><textarea class="ui-state-default" name="roles_and_resp_c">Phasellus nec erat nibh, id convallis orci, consectetuer adipiscing elit. Maecenas sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Aenean placerat sem sit amet odio. Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim. Lorem ipsum qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla eu mattis facilisi.</textarea></td>
            </tr>
            <tr>
                <th>Roles and responsibilities d)<br /><span class="desc">Composition, roles, and responsibilities of the coordinating centre, steering committee, endpoint adjudication committee, data management team, and other individuals or groups overseeing the trial, if applicable (see Item 21a for Data Monitoring Committee).</span></th>
                <td><textarea class="ui-state-default" name="roles_and_resp_d">Proin enim sapien, augue duis dolore eu, bibendum fermentum nunc. Mauris viverra erat a ipsum facilisis eu tristique turpis luctus. Ut consectetur condimentum justo et imperdiet. Nullam urna urna, luctus non lacinia nec, tincidunt non odio. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.  Feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit  te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</textarea></td>
            </tr>
            </tbody>
        </table>

        <div class="spacer">&nbsp;</div>
        <h4>Introduction</h4>
        <table>
            <tbody>
            <tr>
                <th>Background and rationale a)<br /><span class="desc">Description of research question and justification for undertaking the trial, including summary of relevant studies (published and unpublished) examining benefits and harms for each intervention.</span></th>
                <td><textarea class="ui-state-default" name="bg_and_rationale_a">Vivamus nec nisl eu odio fringilla facilisis. Aliquam elementum accumsan nulla, eget congue orci laoreet eu. Aliquam sit amet urna ante, ut luctus justo. Suspendisse mollis convallis  sed convallis penatibus lorem. Dolor suspendisse pretium vitae nunc viverra ornare etiam. Ligula id nulla vel orci.</textarea></td>
            </tr>
            <tr>
                <th>Background and rationale b)<br /><span class="desc">Explanation for choice of comparators.</span></th>
                <td><textarea class="ui-state-default" name="bg_and_rationale_b">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</textarea></td>
            </tr>
            </tbody>
        </table>

        <hr class="thin"></hr>

        <h3>Sort</h3>
        <div>
            <ul id="sortable">
				<!--
                <li class="ui-state-default" id="sort_title">Title</li>
                <li class="ui-state-default" id="sort_registration">Trial registration</li>
                <li class="ui-state-default" id="sort_protocol_version">Protocol version</li>
                <li class="ui-state-default" id="sort_funding">Funding</li>
                <li class="ui-state-default" id="sort_roles_and_resp">Roles and responsibilities</li>
                <li class="ui-state-default" id="sort_bg_and_rationale">Background and rationale</li>
                -->
				<li class="ui-state-default" id="order_0">Title</li>
				<li class="ui-state-default" id="order_1">Trial registration</li>
				<li class="ui-state-default" id="order_2">Protocol version</li>
				<li class="ui-state-default" id="order_3">Funding</li>
				<li class="ui-state-default" id="order_4">Roles and responsibilities</li>
				<li class="ui-state-default" id="order_5">Background and rationale</li>
			</ul>
			<input type="hidden" name="order" id="order" value="" />
        </div>

        <div class="spacer">&nbsp;</div>
        <hr class="thin"></hr>
        <div class="spacer">&nbsp;</div>

        <div><input type="submit" value="Generate Document" class="jqui_button" /></div>
    </form>
</div>

<!-- javascript -->
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.20.custom.min.js"></script>
<!--<script type="text/javascript" src="js/jui-form.js"></script>-->
<script type="text/javascript">
    $(function() {
        //$("form").form();

		var serialized_order = "";
		// jquery button
        $("a.jqui_button, input:submit.jqui_button").button();

        // jquery ui sortable
		//var sort_result = $("#sortable").sortable("serialize");
        $("#sortable").sortable({
            placeholder: "ui-state-highlight",
			create: function(event, ui) {
				serialized_order = $("#sortable").sortable("serialize");
			},
			update: function(event, ui) {
				serialized_order = $("#sortable").sortable("serialize");
			}
        });
        $("#sortable").disableSelection();

        // jquery ajax submit
        $("#login-form").submit(function(event) {
            var $form = $(this),
                $inputs = $form.find("input, select, button, textarea"),
                serializedData = $form.serialize();

            // let's disable the inputs for the duration of the ajax request
            $inputs.attr("disabled", "disabled");

            var jqxhr = $.ajax({
                    url: "api/docx/generate.php?" + serialized_order,
                    type: "POST",
                    data: serializedData
                }).done(function(data) {
                    if (data.success) {
                        setTimeout("window.location = '"+data.filepath+"'", 500);
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
