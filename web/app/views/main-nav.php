<div class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?= HTML::url('/') ?>"><?= UOJConfig::$data['profile']['oj-name-short'] ?></a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a href="<?= HTML::url('/contests') ?>"><?= UOJLocale::get('contests') ?></a></li>
				<li><a href="<?= HTML::url('/problems') ?>"><?= UOJLocale::get('problems') ?></a></li>
				<li><a href="<?= HTML::url('/submissions') ?>"><?= UOJLocale::get('submissions') ?></a></li>
				<li><a href="<?= HTML::url('/hacks') ?>"><?= UOJLocale::get('hacks') ?></a></li>
				<li><a href="<?= HTML::blog_list_url() ?>"><?= UOJLocale::get('blogs') ?></a></li>
				<li><a href="<?= HTML::url('/faq') ?>"><?= UOJLocale::get('help') ?></a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>
<script type="text/javascript">
	var zan_link = '';
</script>