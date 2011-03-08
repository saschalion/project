<div class="print">
    <table>
        <thead>
            <tr>
                <th>
                    Дата составления
                </th>
                <th>
                    Табельный номер
                </th>
                <th>
                    Идентификационный номер налогоплательщика
                </th>
                <th>
                    Номер страхового свидетельства государственного пенсионного страхования
                </th>
                <th>
                    Характер работ
                </th>
                <th>
                    Вид работы (основная, по совместительству)
                </th>
                <th>
                    Пол (м, ж)
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?php echo $jobeet_job->getCreatedAt() ?>
                </td>
                <td>
                    <?php echo $jobeet_job->getTabId() ?>
                </td>
                <td>
                    <?php echo $jobeet_job->getNumberInsurace() ?>
                </td>
                <td>
                    <?php echo $jobeet_job->getPensionSertificate() ?>
                </td>
                <td>
                    <?php echo $jobeet_job->getNatureWork() ?>
                </td>
                <td>
                    <?php echo $jobeet_job->getTypeWork() ?>
                </td>
                <td>
                    <?php echo $jobeet_job->getType() ?>
                </td>

            </tr>
        </tbody>
    </table>
    <h1>Личная карточка работника</h1>
    <h1>I. Общие сведения</h1>
    <ul>
        <li>1.
<span>ФИО</span>
 <?php echo $jobeet_job->getLastName() ?>
 <?php echo $jobeet_job->getFirstName() ?>
 <?php echo $jobeet_job->getThreeName() ?> 
        </li>
        <li>2.
 <span>Дата рождения</span>
 <?php echo $jobeet_job->getDataBirth() ?>

</li>
<li>3.
<span>Место рождения</span>
 г.<?php echo $jobeet_job->getCity() ?>
</li>
<li>4.
<span>Знание иностранного языка</span>
 <?php if ($jobeet_job->getNameForeignLanguage() > '0'): ?>
 <?php echo $jobeet_job->getNameForeignLanguage() . ',' ?>
 <?php echo $jobeet_job->getDegreeKnowledgeForeignLanguages() ?>
  <?php endif; ?>
 </li>
 <li>5.
<span>Образование</span>
 <?php echo $jobeet_job->getEducation() ?>
 </li>
    </ul>
    <?php if ($jobeet_job->getNameEducationalInstitution() > '0'): ?>
    <table>
        <thead>
            <tr>
                <th>
                    Наименование учебного учреждения

                </th>
                <th>
                    Диплом, серия, номер
                </th>
                <th>
                    Год окончания
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?php echo $jobeet_job->getNameEducationalInstitution() ?>
                </td>
                <td>
                    <?php echo $jobeet_job->getDiploma() ?>
                </td>
                <td>
                    <?php echo $jobeet_job->getYearGraduation() ?>
                </td>
            </tr>
            <tr>
                <th>
                    Квалификация по диплому, свидетельству
                </th>
                <th colspan="2">
                   Направление или специальность по диплому (свидетельству)
                </th>

            </tr>
            <tr>
                <td>
                    <?php echo $jobeet_job->getDiplomaQualification() ?>
                </td>
                <td colspan="2">
                    <?php echo $jobeet_job->getSpecialityDiploma() ?>
                </td>

            </tr>
        </tbody>
    </table>
    <? endif; ?>
    <?php if ($jobeet_job->getNameEducationalInstitutionExtra() > '0'): ?>
    <table>
        <caption>Послевузовое профессиональное образование</caption>
        <thead>
            <tr>
                <th>
                    Наименование учебного учреждения

                </th>
                <th>
                    Диплом, серия, номер
                </th>
                <th>
                    Год окончания
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
            </tr>
            <tr>
                <th>
                    Квалификация по диплому, свидетельству
                </th>
                <th colspan="2">
                   Направление или специальность по диплому (свидетельству)
                </th>

            </tr>
            <tr>
                <td>

                </td>
                <td colspan="2">

                </td>

            </tr>
        </tbody>
    </table>
    <? endif; ?>
    <ul>
        <li>6. <span>Профессия</span> <?php echo $jobeet_job->getDiplomaQualification() ?></li>
        <li>7. <span>Состояние в браке</span> 
            <?php if ($jobeet_job->getType() == 'M' & $jobeet_job->getMarriageStatus() == 'Не замужем / Холост'): ?>
                <?php echo 'Холост' ?>
            <? endif; ?>
            <?php if ($jobeet_job->getType() == 'Ж' & $jobeet_job->getMarriageStatus() == 'Не замужем / Холост'): ?>
                <?php echo 'Не замужем' ?>
            <? endif; ?>
            <?php if ($jobeet_job->getType() == 'M' & $jobeet_job->getMarriageStatus() == 'Замужем / Женат'): ?>
                <?php echo 'Женат' ?>
            <? endif; ?>
            <?php if ($jobeet_job->getType() == 'Ж' & $jobeet_job->getMarriageStatus() == 'Замужем / Женат'): ?>
                <?php echo 'Замужем' ?>
            <? endif; ?>
        </li>
        <li>8. <span>Состав семьи</span></li>
    </ul>
    <?php if ($jobeet_job->getChildren() > '0'): ?>
    <table>
        <thead>
            <tr>
                <th>
                    Степень родства (ближайшие родственники)

                </th>
                <th>
                    Фамилия, имя, отчество
                </th>
                <th>
                    Год рождения
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?php echo $jobeet_job->getRelationDegree() ?>
                </td>
                <td>
                    <?php echo $jobeet_job->getChildren() ?>
                </td>
                <td>
                    <?php echo $jobeet_job->getDateBirthChildren() ?>
                </td>
            </tr>
        </tbody>
    </table>
    <? endif; ?>
</div>

