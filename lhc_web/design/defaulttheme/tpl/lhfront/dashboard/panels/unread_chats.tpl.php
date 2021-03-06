<?php if ($currentUser->hasAccessTo('lhchat','use')) : ?>
	<div class="card card-dashboard" data-panel-id="unread_chats" ng-init="lhc.getToggleWidget('unchats_widget_exp')">
		<div class="card-header">
			<a href="<?php echo erLhcoreClassDesign::baseurl('chat/list')?>/(hum)/1"><i class="material-icons chat-unread">chat</i> <?php include(erLhcoreClassDesign::designtpl('lhfront/dashboard/panels/titles/unread_chats.tpl.php'));?> ({{unread_chats.list.length}}{{unread_chats.list.length == lhc.limitu ? '+' : ''}})</a>
			<a title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('pagelayout/pagelayout','collapse/expand')?>" ng-click="lhc.toggleWidget('unchats_widget_exp')" class="fs24 float-right material-icons exp-cntr">{{lhc.toggleWidgetData['unchats_widget_exp'] == false ? 'expand_less' : 'expand_more'}}</a>
		</div>
		<div ng-if="lhc.toggleWidgetData['unchats_widget_exp'] !== true">

			<?php $optinsPanel = array('panelid' => 'unreadd','limitid' => 'limitu'); ?>
			<?php include(erLhcoreClassDesign::designtpl('lhfront/dashboard/panels/parts/options.tpl.php'));?>

			<div class="panel-list" ng-if="unread_chats.list.length > 0">
				<table class="table table-sm mb-0 table-small table-fixed">
					<thead>
						<tr>
							<th width="50%"><i title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','Visitor');?>" class="material-icons">face</i></th>
                            <?php include(erLhcoreClassDesign::designtpl('lhchat/lists/additional_column_header.tpl.php'));?>
							<th width="30%"><i title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','Time ago');?>" class="material-icons">access_time</i></th>
							<th width="20%"><i title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','Department');?>" class="material-icons">home</i></th>
						</tr>
					</thead>
					<tr ng-repeat="chat in unread_chats.list track by chat.id" ng-class="{'user-away-row': chat.user_status_front == 2, 'user-online-row': chat.user_status_front == 0}">
						<td>
							<div class="abbr-list"><span ng-if="chat.country_code != undefined"><img ng-src="<?php echo erLhcoreClassDesign::design('images/flags');?>/{{chat.country_code}}.png" alt="{{chat.country_name}}" title="{{chat.country_name}}" />&nbsp;</span><a title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','Open in a new window');?>" class="material-icons" ng-click="lhc.startChatNewWindow(chat.id,chat.nick)">open_in_new</a><a ng-click="lhc.previewChat(chat.id)" class="material-icons">info_outline</a><a ng-click="lhc.startChat(chat.id,chat.nick)" title="{{chat.nick}}"> {{chat.nick}} </a></div>
						</td>
                        <?php include(erLhcoreClassDesign::designtpl('lhchat/lists/additional_column_body.tpl.php'));?>
						<td>
							<div class="abbr-list" title="{{chat.unread_time.hours}} <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','h.');?> {{chat.unread_time.minits}} <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','m.');?> {{chat.unread_time.seconds}} <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','s.');?> <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','ago');?>.">{{chat.unread_time.hours}} <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','h.');?> {{chat.unread_time.minits}} <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','m.');?> {{chat.unread_time.seconds}} <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','s.');?> <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','ago');?>.</div>
						</td>
						<td>
							<div class="abbr-list" title="{{chat.department_name}}{{chat.product_name ? ' | '+chat.product_name : ''}}">{{chat.department_name}}{{chat.product_name ? ' | '+chat.product_name : ''}}</div>
						</td>
					</tr>
				</table>
			</div>

			<div ng-if="unread_chats.list.length == 0" class="m-1 alert alert-info">
				<i class="material-icons">search</i><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','Nothing found')?>...</div>

		</div>
	</div>
<?php endif; ?>