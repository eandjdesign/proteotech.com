<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>ProteoTech Inc. &mdash; Pipeline: Overview</title>
		<meta name="Description" content="ProteoTech overview of pipeline development" />
		<meta name="Keywords" content="PTI-80 International Alzheimer's Conference, IND, FDA, Phase I Human Clinical Trials" />

		<?php include('../inc/_parts/header.php'); ?>

		<style type="text/css">
			.style2 { font-size: 8pt; }
			.style3 { font-size: 8pt; font-weight: bold; }

			.table-framework th,
			.table-framework td {
				width: 66px;
				padding: 5px;
				vertical-align: middle;
				font-size: 10px;
			}
			.table-framework th.drug-name { width: 85px; }
			.table-framework th.title-p3  { width: 80px; }
			.table-framework th.drug-indication,
			.table-framework th.drug-target { width: 59px; }
			.table-head th {
				background-color: rgb(1, 51, 152);
				color: #fff;
			}
			.table-body th,
			.table-body td {
				background-color: rgb(232, 232, 240);
			}
			.table-body th {
				font-weight: normal;
			}
			.table-body em {
				display: block;
				font-style: normal;
				font-weight: bold;
			}

			.row-highlight th,
			.row-highlight td { background-color: rgb(255, 235, 204); }

			.arrow-cell {
				position: relative;
			}
			.pipeline-arrow {
				position: absolute;
				top: 10px;
				left: 3px;
				width: 100%;
			}
			.arrow-description {
				margin: 0;
				padding: 0;
				height: 35px;
			}
			.red-part,
			.blue-part {
				display: block;
				float: left;
				height: 9px;
				width: auto;
				padding: 7px 0 13px;
				position: absolute;
			}
			.red-part {
				color: #fff;
				background-color: rgb(138, 5, 6);
				z-index: 1;

				border-left-width: 3px;
				border-top-width: 3px;
				border-right-width: 0;
				border-bottom-width: 3px;
				border-style: solid;
				border-left-color: transparent; /*rgb(114, 0, 1);*/
				border-top-color: transparent; /*rgb(139, 5, 2);*/
				border-right-color: transparent;
				border-bottom-color: transparent; /*rgb(78, 11, 7);*/
			}
			.blue-part {
				width: 330px;

				color: #fff;
				background-color: rgb(121, 171, 255);
				text-align: right;

				opacity: 0;
				visibility: hidden;

				border-left-width: 3px;
				border-top-width: 3px;
				border-right-width: 0;
				border-bottom-width: 3px;
				border-style: solid;
				border-left-color: transparent;
				border-top-color: transparent;
				border-right-color: transparent;
				border-bottom-color: transparent; /*rgb(70, 92, 138);*/
			}
			.red-part:after  { border-color: transparent transparent transparent rgb(138, 5, 6); z-index: 1; }
			.blue-part:after { border-color: transparent transparent transparent rgb(121, 171, 255); }

			.red-part:after,
			.blue-part:after {
				position: absolute;
				top: -3px;
				right: -16px;
				width: 0;
				height: 0;
				content: " ";
				border-style: solid;
				border-width: 18px 0 17px 16px;
			}
			.table-row:hover .blue-part {
				visibility: visible;
				opacity: 1;
			}
			.status-start-p1       { width: 185px; }
			.status-start-p2       { width: 260px; }
			.status-start-p3       { width: 320px; }
			.status-start-p2point5 { width: 285px; }
			.status-start-lead     { width: 115px; }
			.status-start-ind      { width: 120px; }
			.status-start-ind + .status-start-p1 { width: 220px; }
			.status-end-discovery  { width: 60px; }

			.align-center { text-align: center; }

			.two-lines { padding: 0 0 20px 4px; }

		</style>
	</head>
	<body onload="P7_initPM(1,0,1,-20,10)">
		<div id="wrapper">

			<?php include('../inc/_parts/contact-for-printing.php'); ?>

			<?php include('../inc/_parts/logo.php'); ?>

			<?php include('../inc/_parts/contact-for-printing.php'); ?>

			<div id="photoBand">
				<div class="mainPhotoBox"><img src="../images/home_photo_temp.gif" width="680" height="205" /></div>
				<div class="sidebarPhotoBox"><img src="../images/blue-pills.jpg" width="214" height="205" /></div>
			</div>
			<div id="contentBox">

				<?php include('../inc/_parts/nav.php'); ?>

				<table width="895" border="0" cellspacing="0" cellpadding="0">
				<tr class="curvy"><td><img src="../images/curves_top.gif" alt="" width="895" height="16"/></td></tr>
					<tr>
						<td class="BG_content_fill">
							<div id="column1">
								<h1>ProteoTech <span>Overview of Development</span></h1>
								<table border="0" cellspacing="1" cellpadding="0" class="table-framework">
									<thead class="table-head">
										<tr class="table-row">
											<th class="drug-name align-center">Name</th>
											<th class="drug-indication align-center">Indication</th>
											<th class="drug-target align-center">Target</th>
											<th class="title-disc align-center">Discovery</th>
											<th class="title-ldo align-center">Lead Drug Optimization</th>
											<th class="title-ind align-center">IND Enabling Index</th>
											<th class="title-p1 align-center">Phase 1</th>
											<th class="title-p2 align-center">Phase 2</th>
											<th class="title-p3 align-center">Phase 3</th>
										</tr>
									</thead>
									<tfoot class="table-foot">
										<tr class="table-row">
											<th colspan="9"></th>
										</tr>
									</tfoot>
									<tbody class="table-body">
										<tr class="table-row row-highlight">
											<th class="align-center"><em>Systebryl&trade; PTI-110</em> + backups</th>
											<td class="align-center">AL Amyloidosis</td>
											<td class="align-center">AL Amyloid</td>
											<td class="arrow-cell" colspan="5">
												<p class="pipeline-arrow arrow-description">
														<span class="red-part status-start-p1">Entering Phase 1 &amp; 2 Proof-of-Concept</span>
														<span class="blue-part status-start-p3">&hellip;ready for Phase 3</span>
												</p>
											</td>
											<td class="align-center">Orphan Disease</td>
										</tr>
										<tr class="table-row row-highlight">
											<th class="align-center"><em>Systebryl&trade; PTI-110</em> + backups</th>
											<td class="align-center">TTR Amyloidosis</td>
											<td class="align-center">TTR Amyloid</td>
											<td class="arrow-cell" colspan="5">
												<p class="pipeline-arrow arrow-description">
														<span class="red-part status-start-p1">Entering Phase 1 &amp; 2 Proof-of-Concept</span>
														<span class="blue-part status-start-p2point5">&hellip;in Phase 1 &amp; 2</span>
												</p>
											</td>
											<td class="align-center">Orphan Disease</td>
										</tr>
										<tr class="table-row row-highlight">
											<th class="align-center"><em>PTI-51-CH3</em> + backups</th>
											<td class="align-center">Progressive Supranuclear Palsy (PSP)</td>
											<td class="align-center">Tau Protein</td>
											<td class="arrow-cell" colspan="5">
												<p class="pipeline-arrow arrow-description">
														<span class="red-part status-start-lead two-lines">Final animal studies and drug formulation</span>
														<span class="blue-part status-start-p2point5">&hellip;in Phase 1 &amp; 2</span>
												</p>
											</td>
											<td class="align-center">Orphan Disease</td>
										</tr>
										<tr class="table-row">
											<th class="align-center"><em>PTI-80</em> + backups</th>
											<td class="align-center">Alzheimer's Disease</td>
											<td class="align-center">Beta-Amyloid &amp; Tau Protein</td>
											<td class="arrow-cell" colspan="5">
												<p class="pipeline-arrow arrow-description">
														<span class="red-part status-start-lead two-lines">Final animal studies and drug formulation</span>
														<span class="blue-part status-start-p2">&hellip;Phase 1 safety completed</span>
												</p>
											</td>
											<td class="align-center">Large Market CNS Disease</td>
										</tr>
										<tr class="table-row">
											<th class="align-center"><em>Synuclere&trade; PD-61-W3</em> + backups</th>
											<td class="align-center">Parkinson's or LBD</td>
											<td class="align-center">Alpha Synuclein</td>
											<td class="arrow-cell" colspan="5">
												<p class="pipeline-arrow arrow-description">
														<span class="red-part status-start-ind two-lines">Final drug formulation to enter IND toxicology</span>
														<span class="blue-part status-start-p2">&hellip;Phase 1 safety completed</span>
												</p>
											</td>
											<td class="align-center">Large Market CNS Disease</td>
										</tr>
										<tr class="table-row">
											<th class="align-center"><em>Pepticlere&trade; DP-74 Peptide</em> nasal delivery</th>
											<td class="align-center">Alzheimer's Disease</td>
											<td class="align-center">Beta-Amyloid</td>
											<td class="arrow-cell" colspan="5">
												<p class="pipeline-arrow arrow-description">
														<span class="red-part status-start-ind two-lines">Final drug formulation to enter IND toxicology</span>
														<span class="blue-part status-start-p1">&hellip;in Phase 1</span>
												</p>
											</td>
											<td class="align-center">Large Market CNS Disease</td>
										</tr>
										<tr class="table-row">
											<th class="align-center"><em>Lead Drugs</em> small molecules</th>
											<td class="align-center">Type 2 Diabetes</td>
											<td class="align-center">Islet Amyloid</td>
											<td class="arrow-cell" colspan="5">
												<p class="pipeline-arrow arrow-description">
														<span class="red-part status-end-discovery two-lines">Lead drug optimization</span>
														<span class="blue-part status-start-lead"></span>
												</p>
											</td>
											<td class="align-center">Large Market Metabolic Disease</td>
										</tr>
									</tbody>
								</table>
								<p><img src="../images/title_pipeline_overview.gif" width="448" height="51" /></p>
								<img src="/images/pipeline_overview-1.jpg" width="620" border="0" />
							</div>
							<div id="column2">
								<script src="/js/pageparts/executive-summaries.js"></script>
								<script src="/js/pageparts/news.js"></script>
							</div>
						</td>
					</tr>
				<tr class="curvy"><td><img src="../images/curves_bottom.gif" alt="" width="895" height="16" /></td></tr>
				</table>
			</div>
		</div>
		<?php include('../inc/_parts/footer.php'); ?>
	</body>
</html>
