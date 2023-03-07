build-ComposerDependenciesLayers:
	mkdir "$(ARTIFACTS_DIR)/vendor"
	cp -a -r vendor/* $(ARTIFACTS_DIR)/vendor

build-LambdaFunction:
	cp -a -r * $(ARTIFACTS_DIR)
	rm $(ARTIFACTS_DIR)/Makefile
	rm -rf $(ARTIFACTS_DIR)/vendor