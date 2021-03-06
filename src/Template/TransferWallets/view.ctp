<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Transfer Wallet'), ['action' => 'edit', $transferWallet->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Transfer Wallet'), ['action' => 'delete', $transferWallet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transferWallet->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Transfer Wallets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transfer Wallet'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="transferWallets view large-9 medium-8 columns content">
    <h3><?= h($transferWallet->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($transferWallet->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Transfer Money') ?></th>
            <td><?= $this->Number->format($transferWallet->transfer_money) ?></td>
        </tr>
        <tr>
            <th><?= __('Sent Wallet Id') ?></th>
            <td><?= $this->Number->format($transferWallet->sent_wallet_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Receive Wallet Id') ?></th>
            <td><?= $this->Number->format($transferWallet->receive_wallet_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($transferWallet->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($transferWallet->modified) ?></td>
        </tr>
    </table>
</div>
