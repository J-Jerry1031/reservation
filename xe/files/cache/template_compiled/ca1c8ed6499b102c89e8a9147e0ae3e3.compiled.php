<?php if(!defined("__XE__"))exit;
echo '<?xml version="1.0" encoding="UTF-8" ?>' ?>
<feed xmlns="http://www.w3.org/2005/Atom">
	<title type="text"><?php echo $__Context->info->title ?></title>
	<?php if($__Context->info->description){ ?>
	<subtitle type="html"><?php echo str_replace('\'', '&apos;', htmlspecialchars($__Context->info->description, ENT_COMPAT | ENT_HTML401, 'UTF-8', false)) ?></subtitle>
	<?php } ?>
	<updated><?php echo $__Context->info->date ?></updated>
	<id><?php echo $__Context->info->id ?></id>
	<link rel="alternate" type="text/html" hreflang="<?php echo $__Context->info->language ?>" href="<?php echo $__Context->info->link ?>"/>
	<link rel="self" type="application/atom+xml" href="<?php echo $__Context->info->id ?>"/>
	<generator uri="http://www.xpressengine.com/">XpressEngine</generator>
<?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->oDocument){ ?>   <entry>
		<title><![CDATA[<?php echo $__Context->oDocument->getTitleText() ?>]]></title>
		<id><?php echo $__Context->oDocument->getPermanentUrl() ?></id>
		<published><?php echo $__Context->oDocument->getRegdate('Y-m-d\TH:i:sP') ?></published>
		<updated><?php echo zdate($__Context->oDocument->get('last_update'),'Y-m-d\TH:i:sP') ?></updated>
		<link rel="alternate" type="text/html" href="<?php echo $__Context->oDocument->getPermanentUrl() ?>"/>
		<link rel="replies" type="text/html" href="<?php echo $__Context->oDocument->getPermanentUrl() ?>#comment"/>
		<author>
			<name><![CDATA[<?php echo str_replace('\'', '&apos;',$__Context->oDocument->getNickName()) ?>]]></name>
			<?php if($__Context->oDocument->isExistsHomepage()){ ?>
			<uri><?php echo $__Context->oDocument->getHomepageUrl() ?></uri>
			<?php } ?>
		</author>
		<?php if($__Context->open_rss_config[$__Context->oDocument->get('module_srl')]=='Y'){ ?>
		<content type="html"><![CDATA[<?php echo $__Context->oDocument->getTransContent(false,false,true) ?>]]></content>
		<?php }else{ ?>
		<summary type="text"><![CDATA[<?php echo $__Context->oDocument->getContentText(100) ?>]]></summary>
		<?php } ?>
		<?php if($__Context->oDocument->get('tag_list')&&count($__Context->oDocument->get('tag_list')))foreach($__Context->oDocument->get('tag_list') as $__Context->tag){ ?>
		<category term="<?php echo str_replace('\'', '&apos;', htmlspecialchars($__Context->tag, ENT_COMPAT | ENT_HTML401, 'UTF-8', false)) ?>"/>
		<?php } ?>
		
	</entry>
<?php } ?>
</feed> 
