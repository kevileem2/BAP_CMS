<?php

if(!$user->isLoggedin()) {
    // user is not logged in, so they don't need to be here
    $session->redirect("/login"); 
}

include('./_head.php'); // include header markup 

$clientPages = $pages->get('template=clients');

?>


<div class="container" style="margin-top: 120px">
	<div class="row">
		<div class="col-xs-12 col-md-6">
		<h2>Clients</h2>
		<?php foreach ($clientPages->children('created_users_id=' . $user->id . ', deleted=0') as $key=>$client) { 
			if ($key < 5) { ?>
				<div class="card border-primary mb-3">
					<div class="card-header"><?= $client->room ?></div>
					<div class="card-body">
						<h4 class="card-title"><?= $client->firstName ?> <?= $client->lastName ?></h4>
						<p class="card-text"><?= $client->condition ?></p>
					</div>
				</div>
			<?php }} ?>
		</div>
		<div class="col-xs-12 col-md-6">
		<h2>Notes</h2>
		<?php foreach ($pages->get('template=notes')->children('sort=created_at, created_users_id='  . $user->id . ', deleted=0') as $key=>$note) { 
			if ($key < 5){
				foreach ($clientPages->children() as $client) {
					if($client->guid == $note->parentGuid) {?>
					<div class="card border-primary mb-3">
						<div class="card-header"><?= $note->created_at ?></div>
						<div class="card-body">
							<h4 class="card-title"><?= $client->firstName ?> <?= $client->lastName ?></h4>
							<p class="card-text"><?= $note->message ?></p>
						</div>
					</div> 

			<?php }}}} ?>
		</div>
	</div>
</div>

<?php include('./_foot.php'); // include footer markup ?>


