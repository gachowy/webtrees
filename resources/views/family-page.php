<?php use Fisharebest\Webtrees\Auth; ?>
<?php use Fisharebest\Webtrees\Functions\FunctionsCharts; ?>
<?php use Fisharebest\Webtrees\Functions\FunctionsPrint; ?>
<?php use Fisharebest\Webtrees\Functions\FunctionsPrintFacts; ?>
<?php use Fisharebest\Webtrees\Html; ?>
<?php use Fisharebest\Webtrees\I18N; ?>
<?php use Fisharebest\Webtrees\Theme; ?>
<?php use Fisharebest\Webtrees\View; ?>

<?php if ($family->isPendingDeletion()): ?>
	<?php if (Auth::isModerator($family->getTree())): ?>
		<?= View::make('alerts/warning-dissmissible', ['alert' => /* I18N: %1$s is “accept”, %2$s is “reject”. These are links. */ I18N::translate( 'This family has been deleted. You should review the deletion and then %1$s or %2$s it.', '<a href="#" class="alert-link" onclick="accept_changes(\'' . $family->getXref() . '\');">' . I18N::translateContext('You should review the deletion and then accept or reject it.', 'accept') . '</a>', '<a href="#" class="alert-link" onclick="reject_changes(\'' . $family->getXref() . '\');">' . I18N::translateContext('You should review the deletion and then accept or reject it.', 'reject') . '</a>') . ' ' . FunctionsPrint::helpLink('pending_changes')]) ?>
	<?php elseif (Auth::isEditor($family->getTree())): ?>
		<?= View::make('alerts/warning-dissmissible', ['alert' => I18N::translate('This family has been deleted. The deletion will need to be reviewed by a moderator.') . ' ' . FunctionsPrint::helpLink('pending_changes')]) ?>
	<?php endif ?>
<?php elseif ($family->isPendingAddition()): ?>
	<?php if (Auth::isModerator($family->getTree())): ?>
		<?= View::make('alerts/warning-dissmissible', ['alert' => /* I18N: %1$s is “accept”, %2$s is “reject”. These are links. */ I18N::translate( 'This family has been edited. You should review the changes and then %1$s or %2$s them.', '<a href="#" class="alert-link" onclick="accept_changes(\'' . $family->getXref() . '\');">' . I18N::translateContext('You should review the changes and then accept or reject them.', 'accept') . '</a>', '<a href="#" class="alert-link" onclick="reject_changes(\'' . $family->getXref() . '\');">' . I18N::translateContext('You should review the changes and then accept or reject them.', 'reject') . '</a>' ) . ' ' . FunctionsPrint::helpLink('pending_changes')]) ?>
	<?php elseif (Auth::isEditor($family->getTree())): ?>
		<?= View::make('alerts/warning-dissmissible', ['alert' => I18N::translate('This family has been edited. The changes need to be reviewed by a moderator.') . ' ' . FunctionsPrint::helpLink('pending_changes')]) ?>
	<?php endif ?>
<?php endif ?>

<h2 class="wt-page-title">
	<?= $family->getFullName() ?>
</h2>

<table id="family-table" class="w-100" role="presentation">
	<tr style="vertical-align:top;">
		<td style="width: <?= Theme::theme()->parameter('chart-box-x') + 30 ?>px;">
			<?php FunctionsCharts::printFamilyChildren($family) ?>
		</td>
		<td>
			<table class="w-100" role="presentation">
				<tr>
					<td class="subheaders"><?= I18N::translate('Parents') ?></td>
					<td class="subheaders"><?= I18N::translate('Grandparents') ?></td>
				</tr>
				<tr>
					<td colspan="2">
						<?php FunctionsCharts::printFamilyParents($family) ?>
						<?php if (Auth::isEditor($family->getTree())): ?>
							<?php if ($family->getHusband() === null): ?>
								<a href="<?= e(Html::url('edit_interface.php', ['action' => 'add_spouse_to_family', 'ged=' => $family->getTree()->getName(), 'xref' => $family->getXref(), 'famtag' => 'HUSB'])) ?>>
									<?= I18N::translate('Add a father') ?>
								</a>
								<br>
							<?php endif ?>
							<?php if ($family->getWife() === null): ?>
								<a href="<?= e(Html::url('edit_interface.php', ['action' => 'add_spouse_to_family', 'ged=' => $family->getTree()->getName(), 'xref' => $family->getXref(), 'famtag' => 'WIFE'])) ?>>
									<?= I18N::translate('Add a mother') ?>
								</a>
								<br>
							<?php endif ?>
						<?php endif ?>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<span class="subheaders"><?= I18N::translate('Family group information') ?></span>
						<table class="table wt-facts-table">
							<?php if (empty($facts)): ?>
								<tr>
									<td class="messagebox" colspan="2">
										<?= I18N::translate('No facts exist for this family.') ?>
									</td>
								</tr>
							<?php else: ?>
								<?php foreach ($facts as $fact): ?>
									<?php FunctionsPrintFacts::printFact($fact, $family) ?>
								<?php endforeach ?>
							<?php endif ?>

							<?php if (Auth::isEditor($family->getTree())): ?>
								<?php FunctionsPrint::printAddNewFact($family->getXref(), $facts, 'FAM') ?>
								<tr>
									<th scope="row">
										<?= I18N::translate('Note') ?>
									</th>
									<td>
										<a href="<?= e(Html::url('edit_interface.php', ['action' => 'add', 'ged' => $family->getTree()->getName(), 'xref' => $family->getXref(), 'fact' => 'NOTE'])) ?>">
											<?= I18N::translate('Add a note') ?>
										</a>
									</td>
								</tr>

								<tr>
									<th scope="row">
										<?= I18N::translate('Shared note') ?>
									</th>
									<td class="optionbox">
										<a href="<?= e(Html::url('edit_interface.php', ['action' => 'add', 'ged' => $family->getTree()->getName(), 'xref' => $family->getXref(), 'fact' => 'SHARED_NOTE'])) ?>">
											<?= I18N::translate('Add a shared note') ?>
										</a>
									</td>
								</tr>

								<?php if ($family->getTree()->getPreference('MEDIA_UPLOAD') >= Auth::accessLevel($family->getTree())): ?>
									<tr>
										<th scope="row">
											<?= I18N::translate('Media object') ?>
										</th>
										<td class="optionbox">
											<a href="<?= e(Html::url('edit_interface.php', ['action' => 'add-media-link', 'ged' => $family->getTree()->getName(), 'xref' => $family->getXref()]))  ?>">
												<?= I18N::translate('Add a media object') ?>
											</a>
										</td>
									</tr>
								<?php endif ?>

								<tr>
									<th scope="row">
										<?= I18N::translate('Source') ?>
									</th>
									<td>
										<a href="<?= e(Html::url('edit_interface.php', ['action' => 'add', 'ged' => $family->getTree()->getName(), 'xref' => $family->getXref(), 'fact' => 'SOUR'])) ?>">
											<?= I18N::translate('Add a source citation') ?>
										</a>
									</td>
								</tr>
							<?php endif ?>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<?= view('modals/ajax') ?>
