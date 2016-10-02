<h3>
  <?php echo l(t('Manage ward user(s)'),
    'group/' . $group->gid . '/member'); ?>
</h3>
<p>
  List and manage the LDSTabs users for this ward.  This page does not allow
  you to add a new user.
</p>

<h3>
  <?php echo l(t('Add ward user'),
    'group/' . $group->gid . '/add'); ?>
</h3>
<p>
  Add an existing LDSTabs user to your ward, or invite anyone with an e-mail
  address to LDSTabs.
</p>

<h3>
  <?php echo l(t('Add (prospective) member'),
    'group/' . $group->gid . '/node/add/member'); ?>
</h3>
<p>
  Add a new (prospective) member to track.
</p>

<h3>
  <?php echo l(t('Edit ward information'),
    'group/' . $group->gid . '/edit'); ?>
</h3>
<p>
  Edit ward name and unit ID.
</p>
