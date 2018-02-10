
# where should the release command output the tarball
TARBALL_DIR ?= ../

DEFAULT_GOAL: serve
SHELL := /bin/bash
PWD := $(shell pwd)
TAG ?= $(shell git rev-parse HEAD)
latest_tag_cmd := git describe --tags $$(git rev-list --tags --max-count=1 2> /dev/null ) 2> /dev/null
LATEST_TAG := $(shell $(latest_tag_cmd))
NEXT_TAG := $(shell echo $(LATEST_TAG) | python version.py)


.PHONY: deps
deps: ## install project dependencies
	bundle install

.PHONY: serve
serve: ## run the site locally
	bundle exec jekyll serve -R

.PHONY: build
build: deps ## build the production version of the site
	bundle exec jekyll build
	cp -r _forms _site/forms

.PHONY: clean
clean: ## cleanup the generated files
	rm -rf _site

.PHONY: package-and-sign
package-and-sign:  ## tar up _site and sign it
	@tar --transform 's|^|/dsx-$(NEXT_TAG)/|' -czvf $(TARBALL_DIR)dsx-$(NEXT_TAG).tar.gz _site
	@echo
	@echo "Signing.."
	@gpg --armor --output $(TARBALL_DIR)dsx-$(NEXT_TAG).tar.gz.asc --detach-sig $(TARBALL_DIR)dsx-$(NEXT_TAG).tar.gz
	@echo "Done. New version at: $(TARBALL_DIR)dsx-$(NEXT_TAG).tar.gz"

.PHONY: release
release: clean build package-and-sign ## build and package a new version

# Explanation of the below shell command should it ever break.
# 1. Set the field separator to ": ##" and any make targets that might appear between : and ##
# 2. Use sed-like syntax to remove the make targets
# 3. Format the split fields into $$1) the target name (in blue) and $$2) the target descrption
# 4. Pass this file as an arg to awk
# 5. Sort it alphabetically
# 6. Format columns with colon as delimiter.
.PHONY: help
help: ## Print this message and exit.
	@printf "Makefile for developing and testing SecureDrop.\n"
	@printf "Subcommands:\n\n"
	@awk 'BEGIN {FS = ":.*?## "} /^[0-9a-zA-Z_-]+:.*?## / {printf "\033[36m%s\033[0m : %s\n", $$1, $$2}' $(MAKEFILE_LIST) \
		| sort \
| column -s ':' -t
