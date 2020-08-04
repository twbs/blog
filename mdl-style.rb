# https://github.com/markdownlint/markdownlint/blob/master/docs/RULES.md
all
exclude_rule "MD001"
exclude_rule "MD002"
exclude_rule "MD012"
exclude_rule "MD013"
exclude_rule "MD026"
exclude_rule "MD033"
exclude_rule "MD035" # this is buggy
exclude_rule "MD036" # this should also be enabled
exclude_rule "MD041"
rule 'MD029', :style => "ordered"
