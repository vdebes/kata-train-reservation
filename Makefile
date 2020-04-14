# Help
TARGETS:=$(MAKEFILE_LIST)

define printSection
	@printf "\033[36m\n==================================================\033[0m\n"
	@printf "\033[36m $1 \033[0m"
	@printf "\033[36m\n==================================================\033[0m\n"
endef

.PHONY: help
help: ## This help
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(TARGETS) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

.PHONY: unit
unit: ## Runs unit tests
	$(call printSection,PHP UNIT)
	vendor/bin/phpunit tests

.PHONY: static
static: ## Runs static analysis
	$(call printSection,PHP STAN ANALYSIS)
	vendor/bin/phpstan analyse src tests
	$(call printSection,PHP MESS DETECTOR ANALYSIS)
	vendor/bin/phpmd src,tests text rules.xml
	$(call printSection,PHP INSIGHTS ANALYSIS)
	vendor/bin/phpinsights --config-path=phpinsights.php -n # Analyses only src - waiting for v2

.PHONY: metrics
metrics: ## Generates code coverage and metrics reports
	$(call printSection,UNIT TESTS COVERAGE REPORTING)
	vendor/bin/phpunit tests --coverage-html reports/coverage
	$(call printSection,PHPLOC METRICS)
	vendor/bin/phploc src tests > reports/metrics.txt && cat reports/metrics.txt

.PHONY: cs
cs: ## Checks the codestyle
	$(call printSection,CODE STYLE CHECKING)
	vendor/bin/phpcs -s

.PHONY: cs-fix
cs-fix: ## Automatically fixes the code style whenever possible
	$(call printSection,CODE STYLE FIXING)
	vendor/bin/phpcbf
