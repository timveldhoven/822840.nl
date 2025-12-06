#!/bin/bash
# Script to push the fotos branch to the remote repository
set -e  # Exit on error
set -u  # Exit on undefined variable

echo "Pushing 'fotos' branch to origin..."
git push origin fotos:fotos

if [ $? -eq 0 ]; then
    echo "✅ Successfully pushed 'fotos' branch to remote repository"
    echo ""
    echo "You can verify by running:"
    echo "  git ls-remote --heads origin fotos"
else
    echo "❌ Failed to push 'fotos' branch"
    echo "Please ensure you have the necessary permissions"
    exit 1
fi
