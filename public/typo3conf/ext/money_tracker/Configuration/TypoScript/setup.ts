plugin.tx_moneytracker {
	view {
		templateRootPaths.0 = {$plugin.tx_moneytracker.view.templateRootPath}
		partialRootPaths.0 = {$plugin.tx_moneytracker.view.partialRootPath}
		layoutRootPaths.0 = {$plugin.tx_moneytracker.view.layoutRootPath}
	}

	persistence {
		storagePid = {$plugin.tx_moneytracker.persistence.storagePid}
	}
}
