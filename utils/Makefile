all:
	./autodoc.py "../definitions/*.json"
	for f in ../definitions/*.md; do \
	  markdown $$f > ../definitions/`basename $$f .md`.html; \
	done

.PHONY: all
