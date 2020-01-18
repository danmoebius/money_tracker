plugin.tx_moneytracker {
	view {
		# cat=plugin.tx_moneytracker/file; type=string; label=Path to template root (FE)
		templateRootPath = EXT:money_tracker/Resources/Private/Templates/
		# cat=plugin.tx_moneytracker/file; type=string; label=Path to template partials (FE)
		partialRootPath = EXT:money_tracker/Resources/Private/Partials/
		# cat=plugin.tx_moneytracker/file; type=string; label=Path to template layouts (FE)
		layoutRootPath = EXT:money_tracker/Resources/Private/Layouts/
	}

	persistence {
		# cat=plugin.tx_moneytracker/a; type=string; label=Default storage PID
		storagePid = 2
	}
}
