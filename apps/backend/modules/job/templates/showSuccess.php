<?php use_helper('Date') ?>
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
                    <?php echo format_date($jobeet_job->getCreatedAt(), 'dd.MM.yyyy') ?>
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

    <table class="labor-contract-table">
        <caption>Трудовой договор (контракт)</caption>
        <thead>            
            <tr>                
                <th>
                    Номер
                </th>
                <th>
                    Дата
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?php echo $jobeet_job->getLaborContract() ?>
                </td>
                <td>
                    <?php echo format_date($jobeet_job->getLaborContractDate(), 'dd.MM.yyyy') ?>
                </td>
            </tr>
        </tbody>
    </table>

    <ol>
        <li>
            <span>ФИО</span>
            <?php echo $jobeet_job->getLastName() ?>
            <?php echo $jobeet_job->getFirstName() ?>
            <?php echo $jobeet_job->getThreeName() ?>
        </li>
        <li>
            <span>Дата рождения</span>
            <?php echo format_date($jobeet_job->getDataBirth(), 'dd.MM.yyyy') ?>
        </li>
        <li>
            <span>Место рождения</span>
             г.<?php echo $jobeet_job->getCity() ?>
        </li>
        <li>
            <span>Гражданство</span>
            <?php echo $jobeet_job->getCitizenship() ?>
        </li>
        <?php if ($jobeet_job->getForeignLanguage()->getNameForeignLanguage()): ?>
            <li>
                <span>Знание иностранного языка</span>
                <?php echo $jobeet_job->getForeignLanguage()->getNameForeignLanguage() . ',' ?>
                <?php echo $jobeet_job->getForeignLanguage()->getDegreeKnowledgeForeignLanguages() ?>
            </li>
         <?php endif; ?>
         <li>
            <span>Образование</span>
            <?php echo $jobeet_job->getEducationalInstitution()->getEducation() ?>
         </li>
            <?php if ($jobeet_job->getEducationalInstitution()->getNameEducationalInstitution()): ?>
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
                            <?php echo $jobeet_job->getEducationalInstitution()->getNameEducationalInstitution() ?>
                        </td>
                        <td>
                            <?php echo $jobeet_job->getEducationalInstitution()->getDiploma() ?>
                        </td>
                        <td>
                            <?php echo $jobeet_job->getEducationalInstitution()->getYearGraduation() ?>
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
                            <?php echo $jobeet_job->getEducationalInstitution()->getDiplomaQualification() ?>
                        </td>
                        <td colspan="2">
                            <?php echo $jobeet_job->getEducationalInstitution()->getSpecialityDiploma() ?>
                        </td>

                    </tr>
                </tbody>
            </table>
            <? endif; ?>
            <?php if ($jobeet_job->getEducationalInstitutionExtra()->getNameEducationalInstitutionExtra()): ?>
            <table>
                <caption><strong>Послевузовое профессиональное образование</strong> <?php echo $jobeet_job->getEducationalInstitutionExtra()->getStudyExtra() ?></caption>
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
                            <?php echo $jobeet_job->getEducationalInstitutionExtra()->getNameEducationalInstitutionExtra() ?>
                        </td>
                        <td>
                            <?php echo $jobeet_job->getEducationalInstitutionExtra()->getDiplomaExtra() ?>
                        </td>
                        <td>
                            <?php echo $jobeet_job->getEducationalInstitutionExtra()->getYearGraduationExtra() ?>
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
                            <?php echo $jobeet_job->getEducationalInstitutionExtra()->getDiplomaQualificationExtra() ?>
                        </td>
                        <td colspan="2">
                            <?php echo $jobeet_job->getEducationalInstitutionExtra()->getSpecialityDiplomaExtra() ?>
                        </td>

                    </tr>
                </tbody>
            </table>
            <? endif; ?>
  
        <li><span>Профессия</span> <?php echo $jobeet_job->getEducationalInstitution()->getDiplomaQualification() ?></li>
        <li><span>Состояние в браке</span> 
            <?php if ($jobeet_job->getType() == 'M' && $jobeet_job->getFamily()->getMarriageStatus() == 'Не замужем / Холост'): ?>
                <?php echo 'Холост' ?>
            <? endif; ?>
            <?php if ($jobeet_job->getType() == 'Ж' && $jobeet_job->getFamily()->getMarriageStatus() == 'Не замужем / Холост'): ?>
                <?php echo 'Не замужем' ?>
            <? endif; ?>
            <?php if ($jobeet_job->getType() == 'M' && $jobeet_job->getFamily()->getMarriageStatus() == 'Замужем / Женат'): ?>
                <?php echo 'Женат' ?>
            <? endif; ?>
            <?php if ($jobeet_job->getType() == 'Ж' && $jobeet_job->getFamily()->getMarriageStatus() == 'Замужем / Женат'): ?>
                <?php echo 'Замужем' ?>
            <? endif; ?>
        </li>
        <li><span>Состав семьи</span></li>
    </ol>
    <?php if ($jobeet_job->getFamily()->getChildren()): ?>
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
                    Дата рождения
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?php echo $jobeet_job->getFamily()->getRelationDegree() ?>
                </td>
                <td>
                    <?php echo $jobeet_job->getFamily()->getChildren() ?>
                </td>
                <td>
                    <?php echo format_date($jobeet_job->getFamily()->getDateBirthChildren(), 'dd.MM.yyyy') ?>
                </td>
            </tr>
        </tbody>
    </table>
    <? endif; ?>
</div>

