<?php

if(!$user->isLoggedin()) {
    // user is not logged in, so they don't need to be here
    $session->redirect("/login"); 
}

 include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_head.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include header markup ?>

<div class="container" style="margin-top: 120px">
	<div class="row">
		<div class="col-xs-12 col-md-12">
			<h2>Clients</h2>
		</div>
	</div>
	<div class="row">
		<?php foreach ($pages->get('template=clients')->children('created_users_id=' . $user->id) as $key=>$client) { ?>
			<div class="col-xs-12 col-md-6">
				<div class="card border-primary mb-3">
					<div class="card-header"><?= $client->room ?></div>
					<div class="card-body">
						<h4 class="card-title"><?= $client->firstName ?> <?= $client->lastName ?> (<?= $client->age ?>)</h4>
						<p class="card-text"><?= $client->condition ?></p>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</div>

<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_foot.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include footer markup ?>