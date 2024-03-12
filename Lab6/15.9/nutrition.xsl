<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method = "html" doctype-system = "about:legacy-compat"/>

    <xsl:template match="/nutritionFacts">
        <html>
            <head>
                <title>Nutritional Facts</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                    }
                    table {
                        border-collapse: collapse;
                        width: 100%;
                        margin-top: 20px;
                    }
                    th, td {
                        border: 1px solid black;
                        padding: 8px;
                        text-align: left;
                    }
                    th {
                        background-color: #f2f2f2;
                    }
                    .header {
                        text-align: center;
                        font-size: 24px;
                        padding-top: 20px;
                    }
                </style>
            </head>
            <body>
                <div class="header">Nutritional Facts</div>
                <table>
                    <tr>
                        <th>Product Name</th>
                        <td><xsl:value-of select="productName"/></td>
                    </tr>
                    <tr>
                        <th>Serving Size</th>
                        <td><xsl:value-of select="servingSize"/></td>
                    </tr>
                    <tr>
                        <th>Calories</th>
                        <td>
                            <xsl:value-of select="calories/text()"/>
                            <xsl:text> </xsl:text>
                            <xsl:value-of select="calories/@unit"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Fat Calories</th>
                        <td>
                            <xsl:value-of select="calories/fatCalories/text()"/>
                            <xsl:text> </xsl:text>
                            <xsl:value-of select="calories/fatCalories/@unit"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Fat</th>
                        <td>
                            <xsl:value-of select="calories/fatCalories/fat/text()"/>
                            <xsl:text> </xsl:text>
                            <xsl:value-of select="calories/fatCalories/fat/@unit"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Saturated Fat</th>
                        <td>
                            <xsl:value-of select="calories/fatCalories/saturatedFat/text()"/>
                            <xsl:text> </xsl:text>
                            <xsl:value-of select="calories/fatCalories/saturatedFat/@unit"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Cholesterol</th>
                        <td>
                            <xsl:value-of select="calories/cholesterol/text()"/>
                            <xsl:text> </xsl:text>
                            <xsl:value-of select="calories/cholesterol/@unit"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Sodium</th>
                        <td>
                            <xsl:value-of select="calories/sodium/text()"/>
                            <xsl:text> </xsl:text>
                            <xsl:value-of select="calories/sodium/@unit"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Total Carbohydrates</th>
                        <td>
                            <xsl:value-of select="calories/totalCarbohydrates/text()"/>
                            <xsl:text> </xsl:text>
                            <xsl:value-of select="calories/totalCarbohydrates/@unit"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Dietary Fiber</th>
                        <td>
                            <xsl:value-of select="calories/fiber/text()"/>
                            <xsl:text> </xsl:text>
                            <xsl:value-of select="calories/fiber/@unit"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Sugars</th>
                        <td>
                            <xsl:value-of select="calories/sugars/text()"/>
                            <xsl:text> </xsl:text>
                            <xsl:value-of select="calories/sugars/@unit"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Protein</th>
                        <td>
                            <xsl:value-of select="calories/protein/text()"/>
                            <xsl:text> </xsl:text>
                            <xsl:value-of select="calories/protein/@unit"/>
                        </td>
                    </tr>
                </table>
            </body>
        </html>
    </xsl:template>

</xsl:stylesheet>
